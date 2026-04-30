<?php

/**
 * Marketing helper — UTM-aware signup URL builder.
 *
 * Reads UTM params from (in order): current request query string,
 * first-touch cookie, fallback (utm_source=psyrisksite&utm_medium=organic).
 */

if (! function_exists('signup_url')) {
    /**
     * Build the canonical signup URL for the psyrisk SaaS,
     * propagating UTMs and optionally pre-selecting a plan.
     *
     * @param string|null $plan inicial|profesional|empresarial
     */
    function signup_url(?string $plan = null): string
    {
        $base   = 'https://psyrisk.cycloidtalent.com/signup';
        $params = marketing_utm_params();

        if ($plan !== null && $plan !== '') {
            $params['plan'] = $plan;
        }

        return $base . '?' . http_build_query($params);
    }
}

if (! function_exists('marketing_utm_params')) {
    function marketing_utm_params(): array
    {
        $keys = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
        $out  = [];

        foreach ($keys as $k) {
            if (! empty($_GET[$k]) && is_string($_GET[$k])) {
                $out[$k] = marketing_utm_sanitize($_GET[$k]);
            }
        }

        if (empty($out) && ! empty($_COOKIE['psyrisk_first_touch_utm'])) {
            $decoded = json_decode((string) $_COOKIE['psyrisk_first_touch_utm'], true);
            if (is_array($decoded)) {
                foreach ($keys as $k) {
                    if (! empty($decoded[$k]) && is_string($decoded[$k])) {
                        $out[$k] = marketing_utm_sanitize($decoded[$k]);
                    }
                }
            }
        }

        if (empty($out['utm_source'])) {
            $out['utm_source'] = 'psyrisksite';
        }
        if (empty($out['utm_medium'])) {
            $out['utm_medium'] = 'organic';
        }

        return $out;
    }
}

if (! function_exists('marketing_utm_sanitize')) {
    function marketing_utm_sanitize(string $v): string
    {
        $v = trim($v);
        $v = preg_replace('/[^A-Za-z0-9._\-\s]/', '', $v) ?? '';
        return mb_substr($v, 0, 64);
    }
}
