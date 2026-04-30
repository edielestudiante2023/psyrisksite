<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

/**
 * On the first hit of the site, capture utm_* params from the query
 * string and store them in a 90-day cookie for multi-page attribution.
 * Subsequent visits keep the original first-touch values.
 */
class UtmFirstTouch implements FilterInterface
{
    private const COOKIE_NAME = 'psyrisk_first_touch_utm';
    private const TTL_DAYS    = 90;
    private const KEYS        = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];

    public function before(RequestInterface $request, $arguments = null)
    {
        if (isset($_COOKIE[self::COOKIE_NAME])) {
            return;
        }

        $captured = [];
        foreach (self::KEYS as $k) {
            $val = $request->getGet($k);
            if (is_string($val) && $val !== '') {
                $clean = preg_replace('/[^A-Za-z0-9._\-\s]/', '', $val) ?? '';
                $clean = mb_substr(trim($clean), 0, 64);
                if ($clean !== '') {
                    $captured[$k] = $clean;
                }
            }
        }

        if (empty($captured)) {
            return;
        }

        $value  = json_encode($captured);
        $expire = time() + (self::TTL_DAYS * 86400);
        $secure = ($request->getServer('HTTPS') === 'on')
            || ($request->getServer('REQUEST_SCHEME') === 'https')
            || ($request->getServer('HTTP_X_FORWARDED_PROTO') === 'https');

        setcookie(self::COOKIE_NAME, (string) $value, [
            'expires'  => $expire,
            'path'     => '/',
            'secure'   => $secure,
            'httponly' => true,
            'samesite' => 'Lax',
        ]);
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // no-op
    }
}
