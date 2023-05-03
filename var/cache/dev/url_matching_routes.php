<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'accueil', '_controller' => 'App\\Controller\\AccueilController::index'], null, null, null, false, false, null]],
        '/connexion/valider' => [[['_route' => 'connexion_valider', '_controller' => 'App\\Controller\\ConnexionController::validerConnexion'], null, null, null, false, false, null]],
        '/deconnexion' => [[['_route' => 'deconnexion', '_controller' => 'App\\Controller\\ConnexionController::deconnexion'], null, null, null, false, false, null]],
        '/equipements' => [[['_route' => 'equipements_afficher', '_controller' => 'App\\Controller\\EquipementsController::index'], null, null, null, false, false, null]],
        '/equipements/ajouter' => [[['_route' => 'equipements_ajouter', '_controller' => 'App\\Controller\\EquipementsController::ajouterEquipements'], null, null, null, false, false, null]],
        '/equipements/demandermodifier' => [[['_route' => 'equipements_demandermodifier', '_controller' => 'App\\Controller\\EquipementsController::modifierEquipements'], null, null, null, false, false, null]],
        '/equipements/validermodifier' => [[['_route' => 'equipements_validermodifier', '_controller' => 'App\\Controller\\EquipementsController::validerModifier'], null, null, null, false, false, null]],
        '/equipements/supprimerJeu' => [[['_route' => 'equipements_supprimer', '_controller' => 'App\\Controller\\EquipementsController::supprimerEquipements'], null, null, null, false, false, null]],
        '/genres' => [[['_route' => 'genres_afficher', '_controller' => 'App\\Controller\\GenresController::index'], null, null, null, false, false, null]],
        '/genres/ajouter' => [[['_route' => 'genres_ajouter', '_controller' => 'App\\Controller\\GenresController::ajouter'], null, null, null, false, false, null]],
        '/genres/demandermodifier' => [[['_route' => 'genres_demandermodifier', '_controller' => 'App\\Controller\\GenresController::demanderModifier'], null, null, null, false, false, null]],
        '/genres/validermodifier' => [[['_route' => 'genres_validermodifier', '_controller' => 'App\\Controller\\GenresController::validerModifier'], null, null, null, false, false, null]],
        '/genres/supprimer' => [[['_route' => 'genres_supprimer', '_controller' => 'App\\Controller\\GenresController::supprimer'], null, null, null, false, false, null]],
        '/jeux' => [[['_route' => 'jeux_afficher', '_controller' => 'App\\Controller\\JeuxController::index'], null, null, null, false, false, null]],
        '/jeux/ajouter' => [[['_route' => 'jeux_ajouter', '_controller' => 'App\\Controller\\JeuxController::ajouterJeux'], null, null, null, false, false, null]],
        '/jeux/demandermodifier' => [[['_route' => 'jeux_demandermodifier', '_controller' => 'App\\Controller\\JeuxController::modifierJeux'], null, null, null, false, false, null]],
        '/jeux/validermodifier' => [[['_route' => 'jeux_validermodifier', '_controller' => 'App\\Controller\\JeuxController::validerModifier'], null, null, null, false, false, null]],
        '/jeux/supprimerJeu' => [[['_route' => 'jeux_supprimer', '_controller' => 'App\\Controller\\JeuxController::supprimerJeux'], null, null, null, false, false, null]],
        '/marques' => [[['_route' => 'marques_afficher', '_controller' => 'App\\Controller\\MarquesController::index'], null, null, null, false, false, null]],
        '/marques/ajouter' => [[['_route' => 'marques_ajouter', '_controller' => 'App\\Controller\\MarquesController::ajouter'], null, null, null, false, false, null]],
        '/marques/demandermodifier' => [[['_route' => 'marques_demandermodifier', '_controller' => 'App\\Controller\\MarquesController::demanderModifier'], null, null, null, false, false, null]],
        '/marques/validermodifier' => [[['_route' => 'marques_validermodifier', '_controller' => 'App\\Controller\\MarquesController::validerModifier'], null, null, null, false, false, null]],
        '/marques/supprimer' => [[['_route' => 'marques_supprimer', '_controller' => 'App\\Controller\\MarquesController::supprimer'], null, null, null, false, false, null]],
        '/pegi' => [[['_route' => 'pegis_afficher', '_controller' => 'App\\Controller\\PegisController::index'], null, null, null, false, false, null]],
        '/pegi/ajouter' => [[['_route' => 'pegis_ajouter', '_controller' => 'App\\Controller\\PegisController::ajouterPegi'], null, null, null, false, false, null]],
        '/pegi/demandermodifier' => [[['_route' => 'pegis_demandermodifier', '_controller' => 'App\\Controller\\PegisController::modifierPegi'], null, null, null, false, false, null]],
        '/pegis/validermodifier' => [[['_route' => 'pegis_validermodifier', '_controller' => 'App\\Controller\\PegisController::validerModifier'], null, null, null, false, false, null]],
        '/pegi/supprimerPegi' => [[['_route' => 'pegis_supprimer', '_controller' => 'App\\Controller\\PegisController::supprimerPegi'], null, null, null, false, false, null]],
        '/plateformes' => [[['_route' => 'plateformes_afficher', '_controller' => 'App\\Controller\\PlateformesController::index'], null, null, null, false, false, null]],
        '/plateformes/ajouter' => [[['_route' => 'plateformes_ajouter', '_controller' => 'App\\Controller\\PlateformesController::ajouter'], null, null, null, false, false, null]],
        '/plateformes/demandermodifier' => [[['_route' => 'plateformes_demandermodifier', '_controller' => 'App\\Controller\\PlateformesController::demanderModifier'], null, null, null, false, false, null]],
        '/plateformes/validermodifier' => [[['_route' => 'plateformes_validermodifier', '_controller' => 'App\\Controller\\PlateformesController::validerModifier'], null, null, null, false, false, null]],
        '/plateformes/supprimer' => [[['_route' => 'plateformes_supprimer', '_controller' => 'App\\Controller\\PlateformesController::supprimer'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [
            [['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
