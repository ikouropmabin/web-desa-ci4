<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('home', 'Home::index');
$routes->get('kontak', 'Kontak::index');
// $routes->get('berita', 'berita::index');
$routes->get('tentang', 'Tentang::index');
$routes->get('galeri', 'Galeri::index');
$routes->get('sejarah', 'Sejarah::index');
$routes->get('agenda', 'Agenda::index');
