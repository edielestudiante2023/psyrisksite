<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Servicios
$routes->group('servicios', static function ($routes) {
    $routes->get('bateria-riesgo', 'Servicios::bateriaRiesgo');
    $routes->get('clima-organizacional', 'Servicios::climaOrganizacional');
    $routes->get('vigilancia-epidemiologica', 'Servicios::vigilanciaEpidemiologica');
    $routes->get('planes-intervencion', 'Servicios::planesIntervencion');
    $routes->get('capacitaciones', 'Servicios::capacitaciones');
});

// Precios
$routes->get('precios', 'Precios::index');

// Nosotros
$routes->get('nosotros', 'Nosotros::index');

// Contacto
$routes->get('contacto', 'Contacto::index');
$routes->post('contacto/enviar', 'Contacto::enviar');
$routes->get('contacto/gracias', 'Contacto::gracias');

// Consultoras
$routes->group('consultoras', static function ($routes) {
    $routes->get('/', 'Consultoras::index');
    $routes->get('como-funciona', 'Consultoras::comoFunciona');
    $routes->get('marca-propia', 'Consultoras::marcaPropia');
    $routes->get('precios', 'Consultoras::precios');
});

// Recursos y normativa
$routes->get('recursos', 'Recursos::index');
$routes->group('normativa', static function ($routes) {
    $routes->get('resolucion-2764', 'Normativa::resolucion2764');
    $routes->get('bateria-psicosocial-colombia', 'Normativa::bateriaPsicosocial');
    $routes->get('riesgo-psicosocial', 'Normativa::riesgoPsicosocial');
    $routes->get('sg-sst', 'Normativa::sgSst');
    $routes->get('ley-1581', 'Normativa::ley1581');
});

// Legal
$routes->get('privacidad', 'Legal::privacidad');
$routes->get('terminos', 'Legal::terminos');

// PWA
$routes->get('offline', 'Pwa::offline');
