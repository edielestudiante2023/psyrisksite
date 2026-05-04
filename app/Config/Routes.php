<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 *
 * Nota: usamos match(['get', 'head'], ...) en vez de get(...) para que los
 * crawlers de Google, Bing y otros que validan la URL con HEAD reciban 200
 * en lugar de 404. Sin esto, los bots marcan la página como "no indexable".
 */
$routes->match(['get', 'head'], '/', 'Home::index');

// Servicios
$routes->group('servicios', static function ($routes) {
    $routes->match(['get', 'head'], 'bateria-riesgo', 'Servicios::bateriaRiesgo');
    $routes->match(['get', 'head'], 'clima-organizacional', 'Servicios::climaOrganizacional');
    $routes->match(['get', 'head'], 'clima-organizacional/ficha-tecnica', 'Servicios::fichaTecnicaClima');
    $routes->match(['get', 'head'], 'vigilancia-epidemiologica', 'Servicios::vigilanciaEpidemiologica');
    $routes->match(['get', 'head'], 'planes-intervencion', 'Servicios::planesIntervencion');
    $routes->match(['get', 'head'], 'capacitaciones', 'Servicios::capacitaciones');
});

// Precios
$routes->match(['get', 'head'], 'precios', 'Precios::index');

// Nosotros
$routes->match(['get', 'head'], 'nosotros', 'Nosotros::index');

// Contacto
$routes->match(['get', 'head'], 'contacto', 'Contacto::index');
$routes->post('contacto/enviar', 'Contacto::enviar');
$routes->match(['get', 'head'], 'contacto/gracias', 'Contacto::gracias');

// Consultoras
$routes->group('consultoras', static function ($routes) {
    $routes->match(['get', 'head'], '/', 'Consultoras::index');
    $routes->match(['get', 'head'], 'como-funciona', 'Consultoras::comoFunciona');
    $routes->match(['get', 'head'], 'marca-propia', 'Consultoras::marcaPropia');
    $routes->match(['get', 'head'], 'precios', 'Consultoras::precios');
});

// Recursos y normativa
$routes->match(['get', 'head'], 'recursos', 'Recursos::index');
$routes->group('normativa', static function ($routes) {
    $routes->match(['get', 'head'], 'resolucion-2764', 'Normativa::resolucion2764');
    $routes->match(['get', 'head'], 'bateria-psicosocial-colombia', 'Normativa::bateriaPsicosocial');
    $routes->match(['get', 'head'], 'riesgo-psicosocial', 'Normativa::riesgoPsicosocial');
    $routes->match(['get', 'head'], 'sg-sst', 'Normativa::sgSst');
    $routes->match(['get', 'head'], 'ley-1581', 'Normativa::ley1581');
});

// Legal
$routes->match(['get', 'head'], 'privacidad', 'Legal::privacidad');
$routes->match(['get', 'head'], 'terminos', 'Legal::terminos');

// Referidos
$routes->match(['get', 'head'], 'referidos', 'Referidos::index');
$routes->post('referidos/registrar', 'Referidos::registrar');

// Webinar
$routes->match(['get', 'head'], 'webinar', 'Webinar::index');
$routes->post('webinar/registrar', 'Webinar::registrar');
$routes->match(['get', 'head'], 'webinar/gracias', 'Webinar::gracias');

// Digitación inteligente (foto + IA — landing comercial; CTAs van a cycloidtalent.com/contacto)
$routes->match(['get', 'head'], 'digitacion-inteligente', 'DigitacionInteligente::index');

// PWA
$routes->match(['get', 'head'], 'offline', 'Pwa::offline');
