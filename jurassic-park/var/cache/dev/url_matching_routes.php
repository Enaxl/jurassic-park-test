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
        '/admin/client' => [[['_route' => 'app_admin_client', '_controller' => 'App\\Controller\\AdministrateurController::new'], null, ['GET' => 0], null, false, false, null]],
        '/admin/new-form' => [[['_route' => 'app_client_form', '_controller' => 'App\\Controller\\AdministrateurController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/filter-libelle-client' => [[['_route' => 'app_client_filter_name', '_controller' => 'App\\Controller\\AdministrateurController::filterName'], null, ['GET' => 0], null, false, false, null]],
        '/admin/profile' => [[['_route' => 'app_profile_admin', '_controller' => 'App\\Controller\\AdministrateurController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/biome' => [[['_route' => 'app_biome_index', '_controller' => 'App\\Controller\\BiomeController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/biome/new' => [[['_route' => 'app_biome_new', '_controller' => 'App\\Controller\\BiomeController::new'], null, ['POST' => 0], null, false, false, null]],
        '/admin/biome/new-form' => [[['_route' => 'app_biome_form', '_controller' => 'App\\Controller\\BiomeController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/chambre' => [[['_route' => 'app_chambre_index', '_controller' => 'App\\Controller\\ChambreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/chambre/new' => [[['_route' => 'app_chambre_new', '_controller' => 'App\\Controller\\ChambreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/chambre/new-form' => [[['_route' => 'app_chambre_form', '_controller' => 'App\\Controller\\ChambreController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/client' => [[['_route' => 'app_client_index', '_controller' => 'App\\Controller\\ClientController::index'], null, ['GET' => 0], null, false, false, null]],
        '/client/profile' => [[['_route' => 'app_client_profile', '_controller' => 'App\\Controller\\ClientController::profile'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/hotel-loue' => [[['_route' => 'app_hotel_loue', '_controller' => 'App\\Controller\\ClientController::hotelLoue'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/change-note' => [[['_route' => 'app_change_note', '_controller' => 'App\\Controller\\ClientController::changeNote'], null, ['GET' => 0], null, false, false, null]],
        '/client/reserver-aventure/billet' => [[['_route' => 'app_client_payer', '_controller' => 'App\\Controller\\ClientController::reserverBillet'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/client/reserver-aventure/hotel' => [[['_route' => 'app_client_louer', '_controller' => 'App\\Controller\\ClientController::louerHotel'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/client/reserver-aventure/restaurant' => [[['_route' => 'app_client_reserver', '_controller' => 'App\\Controller\\ClientController::reserverRestaurant'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/client/reserver-aventure/recapitulatif' => [[['_route' => 'app_client_recapitulatif', '_controller' => 'App\\Controller\\ClientController::recapitulatifCommande'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/client/reserver-aventure/insert' => [[['_route' => 'app_client_insert', '_controller' => 'App\\Controller\\ClientController::insertDataReservation'], null, ['POST' => 0, 'GET' => 1], null, false, false, null]],
        '/register' => [[['_route' => 'app_register_client', '_controller' => 'App\\Controller\\ClientRegistrationController::register'], null, null, null, false, false, null]],
        '/resendOtp' => [[['_route' => 'app_resend_otp', '_controller' => 'App\\Controller\\ClientRegistrationController::resendOtp'], null, null, null, false, false, null]],
        '/admin/dinosaure' => [[['_route' => 'app_dinosaure_index', '_controller' => 'App\\Controller\\DinosaureController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dinosaure/new' => [[['_route' => 'app_dinosaure_new', '_controller' => 'App\\Controller\\DinosaureController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/dinosaure/new-form' => [[['_route' => 'app_dinosaure_form', '_controller' => 'App\\Controller\\DinosaureController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/dinosaure/new-form-duplicate' => [[['_route' => 'app_dinosaure_duplicate_form', '_controller' => 'App\\Controller\\DinosaureController::getFormDuplicate'], null, ['GET' => 0], null, false, false, null]],
        '/admin/enclos' => [[['_route' => 'app_enclos_index', '_controller' => 'App\\Controller\\EnclosController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/enclos/new' => [[['_route' => 'app_enclos_new', '_controller' => 'App\\Controller\\EnclosController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/enclos/new-form' => [[['_route' => 'app_enclos_form', '_controller' => 'App\\Controller\\EnclosController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/format/billet' => [[['_route' => 'app_format_billet_index', '_controller' => 'App\\Controller\\FormatBilletController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/format/billet/new' => [[['_route' => 'app_format_billet_new', '_controller' => 'App\\Controller\\FormatBilletController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/format/billet/new-form' => [[['_route' => 'app_format_billet_form', '_controller' => 'App\\Controller\\FormatBilletController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/format/chambre' => [[['_route' => 'app_format_chambre_index', '_controller' => 'App\\Controller\\FormatChambreController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/format/chambre/new' => [[['_route' => 'app_format_chambre_new', '_controller' => 'App\\Controller\\FormatChambreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/format/chambre/new-form' => [[['_route' => 'app_format_chambre_form', '_controller' => 'App\\Controller\\FormatChambreController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/horaire' => [[['_route' => 'app_horaire_index', '_controller' => 'App\\Controller\\HoraireController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/horaire/new' => [[['_route' => 'app_horaire_new', '_controller' => 'App\\Controller\\HoraireController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/horaire/new-form' => [[['_route' => 'app_horaire_form', '_controller' => 'App\\Controller\\HoraireController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/hotel' => [[['_route' => 'app_hotel_index', '_controller' => 'App\\Controller\\HotelController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/hotel/new' => [[['_route' => 'app_hotel_new', '_controller' => 'App\\Controller\\HotelController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/hotel/new-form' => [[['_route' => 'app_hotel_form', '_controller' => 'App\\Controller\\HotelController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/admin/jour' => [[['_route' => 'app_jour_index', '_controller' => 'App\\Controller\\JourController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/jour/new' => [[['_route' => 'app_jour_new', '_controller' => 'App\\Controller\\JourController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/jour/new-form' => [[['_route' => 'app_jour_form', '_controller' => 'App\\Controller\\JourController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/paiement' => [[['_route' => 'paiement', '_controller' => 'App\\Controller\\PaiementController::formulairePaiement'], null, null, null, false, false, null]],
        '/paiement/confirmation' => [[['_route' => 'paiement_confirmation', '_controller' => 'App\\Controller\\PaiementController::confirmerPaiement'], null, ['POST' => 0], null, false, false, null]],
        '/paiement/retrait' => [[['_route' => 'point_retrait', '_controller' => 'App\\Controller\\PaiementController::pointRetrait'], null, null, null, false, false, null]],
        '/panier' => [[['_route' => 'panier_afficher', '_controller' => 'App\\Controller\\PanierController::afficher'], null, null, null, false, false, null]],
        '/panier/modifier' => [[['_route' => 'panier_modifier', '_controller' => 'App\\Controller\\PanierController::modifierQuantite'], null, ['POST' => 0], null, false, false, null]],
        '/boutique' => [[['_route' => 'produit_index', '_controller' => 'App\\Controller\\ProduitBoutiqueController::index'], null, null, null, false, false, null]],
        '/filter-libelle' => [[['_route' => 'app_produit_filter_name', '_controller' => 'App\\Controller\\ProduitBoutiqueController::filterName'], null, ['GET' => 0], null, false, false, null]],
        '/admin/produit' => [[['_route' => 'app_produit_index', '_controller' => 'App\\Controller\\ProduitController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/produit/new' => [[['_route' => 'app_produit_new', '_controller' => 'App\\Controller\\ProduitController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/produit/new-form' => [[['_route' => 'app_produit_form', '_controller' => 'App\\Controller\\ProduitController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/client/remboursementBillet' => [[['_route' => 'app_client_remboursement_billet', '_controller' => 'App\\Controller\\RemboursementBilletController::index'], null, ['GET' => 0], null, false, false, null]],
        '/client/remboursement' => [[['_route' => 'app_client_remboursement', '_controller' => 'App\\Controller\\RemboursementController::indexRemboursement'], null, null, null, false, false, null]],
        '/admin/remboursement' => [[['_route' => 'app_admin_remboursement', '_controller' => 'App\\Controller\\RemboursementController::adminIndex'], null, null, null, false, false, null]],
        '/remboursement/hotel' => [[['_route' => 'app_remboursement_hotel', '_controller' => 'App\\Controller\\RemboursementHotelController::index'], null, null, null, false, false, null]],
        '/admin/restaurant' => [[['_route' => 'app_restaurant_index', '_controller' => 'App\\Controller\\RestaurantController::index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/restaurant/new' => [[['_route' => 'app_restaurant_new', '_controller' => 'App\\Controller\\RestaurantController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/restaurant/new-form' => [[['_route' => 'app_restaurant_form', '_controller' => 'App\\Controller\\RestaurantController::getForm'], null, ['GET' => 0], null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/' => [
            [['_route' => 'app_user_accueil', '_controller' => 'App\\Controller\\UserController::home'], null, ['POST' => 0, 'GET' => 1], null, false, false, null],
            [['_route' => 'user_home', '_controller' => 'App\\Controller\\UserController::home'], null, null, null, false, false, null],
        ],
        '/dinopedia' => [[['_route' => 'app_dinopedia', '_controller' => 'App\\Controller\\UserController::dinopedia'], null, ['GET' => 0], null, false, false, null]],
        '/filter-libelle-dinopedia' => [[['_route' => 'app_dinopedia_filter_name', '_controller' => 'App\\Controller\\UserController::filterName'], null, ['GET' => 0], null, false, false, null]],
        '/mot-de-passe-oublie' => [[['_route' => 'app_mdp_forgotten', '_controller' => 'App\\Controller\\UserController::motDePasseOublie'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/en-cours-de-developpement' => [[['_route' => 'app_cours_developpement', '_controller' => 'App\\Controller\\UserController::incoming'], null, ['GET' => 0], null, false, false, null]],
        '/histoire' => [[['_route' => 'app_histoire', '_controller' => 'App\\Controller\\UserController::histoire'], null, ['GET' => 0], null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:98)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:134)'
                                .'|router(*:148)'
                                .'|exception(?'
                                    .'|(*:168)'
                                    .'|\\.css(*:181)'
                                .')'
                            .')'
                            .'|(*:191)'
                        .')'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|biome/(?'
                        .'|edit/([^/]++)(*:234)'
                        .'|([^/]++)(*:250)'
                        .'|filter\\-libelle\\-biome(*:280)'
                    .')'
                    .'|chambre/(?'
                        .'|edit/([^/]++)(*:313)'
                        .'|([^/]++)(*:329)'
                        .'|filter\\-libelle\\-chambre(*:361)'
                    .')'
                    .'|dinosaure/(?'
                        .'|edit/([^/]++)(*:396)'
                        .'|duplicate/([^/]++)(*:422)'
                        .'|([^/]++)(*:438)'
                        .'|json(*:450)'
                        .'|xml(*:461)'
                        .'|filter\\-libelle\\-dinosaure(*:495)'
                    .')'
                    .'|enclos/(?'
                        .'|edit/([^/]++)(*:527)'
                        .'|([^/]++)(*:543)'
                        .'|filter\\-libelle\\-enclos(*:574)'
                    .')'
                    .'|format/(?'
                        .'|billet/(?'
                            .'|edit/([^/]++)(*:616)'
                            .'|([^/]++)(*:632)'
                            .'|filter\\-libelle\\-format\\-billet(*:671)'
                        .')'
                        .'|chambre/(?'
                            .'|edit/([^/]++)(*:704)'
                            .'|([^/]++)(*:720)'
                            .'|filter\\-libelle\\-format\\-chambre(*:760)'
                        .')'
                    .')'
                    .'|ho(?'
                        .'|raire/(?'
                            .'|edit/([^/]++)(*:797)'
                            .'|([^/]++)(*:813)'
                        .')'
                        .'|tel/(?'
                            .'|edit/([^/]++)(*:842)'
                            .'|([^/]++)(*:858)'
                            .'|filter\\-libelle\\-hotel(*:888)'
                        .')'
                    .')'
                    .'|jour/(?'
                        .'|edit/([^/]++)(*:919)'
                        .'|([^/]++)(*:935)'
                        .'|filter\\-libelle\\-jour(*:964)'
                    .')'
                    .'|produit/(?'
                        .'|edit/([^/]++)(*:997)'
                        .'|([^/]++)(*:1013)'
                    .')'
                    .'|re(?'
                        .'|mboursement/(?'
                            .'|update/([^/]++)(*:1058)'
                            .'|([^/]++)/statut(*:1082)'
                        .')'
                        .'|staurant/(?'
                            .'|edit/([^/]++)(*:1117)'
                            .'|([^/]++)(*:1134)'
                            .'|filter\\-libelle\\-restaurant(*:1170)'
                        .')'
                    .')'
                .')'
                .'|/verify\\-otp/([^/]++)(*:1203)'
                .'|/panier/(?'
                    .'|supprimer/([^/]++)(*:1241)'
                    .'|ajouter/([^/]++)(*:1266)'
                .')'
                .'|/client/remboursement/([^/]++)(*:1306)'
                .'|/dinopedia/([^/]++)(*:1334)'
                .'|/res(?'
                    .'|et\\-password/([^/]++)(*:1371)'
                    .'|taurant/([^/]++)(*:1396)'
                .')'
                .'|/hotel/([^/]++)(*:1421)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        98 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        134 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        148 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        168 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        181 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        191 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        234 => [[['_route' => 'app_biome_edit', '_controller' => 'App\\Controller\\BiomeController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        250 => [[['_route' => 'app_biome_delete', '_controller' => 'App\\Controller\\BiomeController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        280 => [[['_route' => 'app_biome_filter_name', '_controller' => 'App\\Controller\\BiomeController::filterName'], [], ['GET' => 0], null, false, false, null]],
        313 => [[['_route' => 'app_chambre_edit', '_controller' => 'App\\Controller\\ChambreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        329 => [[['_route' => 'app_chambre_delete', '_controller' => 'App\\Controller\\ChambreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        361 => [[['_route' => 'app_chambre_filter_name', '_controller' => 'App\\Controller\\ChambreController::filterName'], [], ['GET' => 0], null, false, false, null]],
        396 => [[['_route' => 'app_dinosaure_edit', '_controller' => 'App\\Controller\\DinosaureController::edit'], ['id'], ['POST' => 0], null, false, true, null]],
        422 => [[['_route' => 'app_dinosaure_duplicate', '_controller' => 'App\\Controller\\DinosaureController::duplicate'], ['id'], ['POST' => 0], null, false, true, null]],
        438 => [[['_route' => 'app_dinosaure_delete', '_controller' => 'App\\Controller\\DinosaureController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        450 => [[['_route' => 'app_dinosaure_json', '_controller' => 'App\\Controller\\DinosaureController::dinosaureJson'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        461 => [[['_route' => 'app_dinosaure_xml', '_controller' => 'App\\Controller\\DinosaureController::dinosaureXml'], [], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        495 => [[['_route' => 'app_dinosaure_filter_name', '_controller' => 'App\\Controller\\DinosaureController::filterName'], [], ['GET' => 0], null, false, false, null]],
        527 => [[['_route' => 'app_enclos_edit', '_controller' => 'App\\Controller\\EnclosController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        543 => [[['_route' => 'app_enclos_delete', '_controller' => 'App\\Controller\\EnclosController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        574 => [[['_route' => 'app_enclos_filter_name', '_controller' => 'App\\Controller\\EnclosController::filterName'], [], ['GET' => 0], null, false, false, null]],
        616 => [[['_route' => 'app_format_billet_edit', '_controller' => 'App\\Controller\\FormatBilletController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        632 => [[['_route' => 'app_format_billet_delete', '_controller' => 'App\\Controller\\FormatBilletController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        671 => [[['_route' => 'app_format_billet_filter_name', '_controller' => 'App\\Controller\\FormatBilletController::filterName'], [], ['GET' => 0], null, false, false, null]],
        704 => [[['_route' => 'app_format_chambre_edit', '_controller' => 'App\\Controller\\FormatChambreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        720 => [[['_route' => 'app_format_chambre_delete', '_controller' => 'App\\Controller\\FormatChambreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        760 => [[['_route' => 'app_format_chambre_filter_name', '_controller' => 'App\\Controller\\FormatChambreController::filterName'], [], ['GET' => 0], null, false, false, null]],
        797 => [[['_route' => 'app_horaire_edit', '_controller' => 'App\\Controller\\HoraireController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        813 => [[['_route' => 'app_horaire_delete', '_controller' => 'App\\Controller\\HoraireController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        842 => [[['_route' => 'app_hotel_edit', '_controller' => 'App\\Controller\\HotelController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        858 => [[['_route' => 'app_hotel_delete', '_controller' => 'App\\Controller\\HotelController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        888 => [[['_route' => 'app_hotel_filter_name', '_controller' => 'App\\Controller\\HotelController::filterName'], [], ['GET' => 0], null, false, false, null]],
        919 => [[['_route' => 'app_jour_edit', '_controller' => 'App\\Controller\\JourController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        935 => [[['_route' => 'app_jour_delete', '_controller' => 'App\\Controller\\JourController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        964 => [[['_route' => 'app_jour_filter_name', '_controller' => 'App\\Controller\\JourController::filterName'], [], ['GET' => 0], null, false, false, null]],
        997 => [[['_route' => 'app_produit_edit', '_controller' => 'App\\Controller\\ProduitController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1013 => [[['_route' => 'app_produit_delete', '_controller' => 'App\\Controller\\ProduitController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1058 => [[['_route' => 'app_admin_remboursement_update', '_controller' => 'App\\Controller\\RemboursementController::updateStatus'], ['id'], ['POST' => 0], null, false, true, null]],
        1082 => [[['_route' => 'app_admin_update_remboursement', '_controller' => 'App\\Controller\\RemboursementController::updateStatut'], ['id'], ['POST' => 0], null, false, false, null]],
        1117 => [[['_route' => 'app_restaurant_edit', '_controller' => 'App\\Controller\\RestaurantController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1134 => [[['_route' => 'app_restaurant_delete', '_controller' => 'App\\Controller\\RestaurantController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1170 => [[['_route' => 'app_restaurant_filter_name', '_controller' => 'App\\Controller\\RestaurantController::filterName'], [], ['GET' => 0], null, false, false, null]],
        1203 => [[['_route' => 'app_verify_otp', '_controller' => 'App\\Controller\\ClientRegistrationController::verifyOtp'], ['id'], null, null, false, true, null]],
        1241 => [[['_route' => 'panier_supprimer', '_controller' => 'App\\Controller\\PanierController::supprimerDuPanier'], ['id'], null, null, false, true, null]],
        1266 => [[['_route' => 'panier_ajouter', '_controller' => 'App\\Controller\\ProduitBoutiqueController::ajouterAuPanier'], ['id'], null, null, false, true, null]],
        1306 => [[['_route' => 'app_client_demande_remboursement_billet', '_controller' => 'App\\Controller\\RemboursementBilletController::demanderRemboursement'], ['id'], ['POST' => 0], null, false, true, null]],
        1334 => [[['_route' => 'app_dinopedia_dino', '_controller' => 'App\\Controller\\UserController::unDino'], ['id'], ['GET' => 0], null, false, true, null]],
        1371 => [[['_route' => 'app_reset_password', '_controller' => 'App\\Controller\\UserController::resetPassword'], ['token'], ['GET' => 0, 'POST' => 1], null, false, true, null]],
        1396 => [[['_route' => 'app_un_restaurant', '_controller' => 'App\\Controller\\UserController::afficherUnRestaurant'], ['id'], ['GET' => 0], null, false, true, null]],
        1421 => [
            [['_route' => 'app_un_hotel', '_controller' => 'App\\Controller\\UserController::afficherUnHotel'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
