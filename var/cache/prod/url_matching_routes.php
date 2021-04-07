<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\AgenceImmobiliereController::index'], null, null, null, false, false, null]],
        '/biens_immobiliers' => [[['_route' => 'biens_immobiliers', '_controller' => 'App\\Controller\\AgenceImmobiliereController::biens_immobiliers'], null, null, null, false, false, null]],
        '/immo' => [[['_route' => 'filtreImmoByMax', '_controller' => 'App\\Controller\\AgenceImmobiliereController::filtreImmoByMax'], null, null, null, false, false, null]],
        '/authentification' => [[['_route' => 'authentification', '_controller' => 'App\\Controller\\AuthentificationController::authentification'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\AuthentificationController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\AuthentificationController::logout'], null, null, null, false, false, null]],
        '/contact' => [[['_route' => 'contact', '_controller' => 'App\\Controller\\ContactController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/biens_immobiliers/(?'
                    .'|([0-9]+)(*:37)'
                    .'|edit/([^/]++)(*:57)'
                    .'|([^/]++)(*:72)'
                    .'|reservation/([^/]++)(*:99)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        37 => [[['_route' => 'biens_immobiliers_suppression', '_controller' => 'App\\Controller\\AgenceImmobiliereController::suppression'], ['id'], ['DELETE' => 0], null, false, true, null]],
        57 => [[['_route' => 'biens_immobiliers_modification', '_controller' => 'App\\Controller\\AgenceImmobiliereController::modification'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        72 => [[['_route' => 'biens_immobiliers_lire', '_controller' => 'App\\Controller\\AgenceImmobiliereController::bien'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        99 => [
            [['_route' => 'app_reservation', '_controller' => 'App\\Controller\\AgenceImmobiliereController::reservation'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
