<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\Admin\\DashboardController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => null, 'crudAction' => null], null, null, null, false, false, null]],
        '/admin/reset-password-request' => [[['_route' => 'admin_reset_password_request_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reset-password-request/new' => [[['_route' => 'admin_reset_password_request_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/reset-password-request/batch-delete' => [[['_route' => 'admin_reset_password_request_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/reset-password-request/autocomplete' => [[['_route' => 'admin_reset_password_request_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/reset-password-request/render-filters' => [[['_route' => 'admin_reset_password_request_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user' => [[['_route' => 'admin_user_index', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::index', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'index'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/new' => [[['_route' => 'admin_user_new', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::new', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/user/batch-delete' => [[['_route' => 'admin_user_batch_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::batchDelete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'batchDelete'], null, ['POST' => 0], null, false, false, null]],
        '/admin/user/autocomplete' => [[['_route' => 'admin_user_autocomplete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::autocomplete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'autocomplete'], null, ['GET' => 0], null, false, false, null]],
        '/admin/user/render-filters' => [[['_route' => 'admin_user_render_filters', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::renderFilters', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'renderFilters'], null, ['GET' => 0], null, false, false, null]],
        '/_wdt/styles' => [[['_route' => '_wdt_stylesheet', '_controller' => 'web_profiler.controller.profiler::toolbarStylesheetAction'], null, null, null, false, false, null]],
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/xdebug' => [[['_route' => '_profiler_xdebug', '_controller' => 'web_profiler.controller.profiler::xdebugAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/back/sport' => [[['_route' => 'back_sport_index', '_controller' => 'App\\Controller\\ActivitePhysiqueController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/sport/new' => [[['_route' => 'back_sport_new', '_controller' => 'App\\Controller\\ActivitePhysiqueController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/aliment' => [[['_route' => 'app_aliment_index', '_controller' => 'App\\Controller\\AlimentController::index'], null, ['GET' => 0], null, false, false, null]],
        '/aliment/new' => [[['_route' => 'app_aliment_new', '_controller' => 'App\\Controller\\AlimentController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [
            [['_route' => 'dashboard', '_controller' => 'App\\Controller\\BackController::dashboard'], null, null, null, false, false, null],
            [['_route' => 'app_home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null],
        ],
        '/categorie' => [[['_route' => 'app_categorie_index', '_controller' => 'App\\Controller\\CategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/categorie/new' => [[['_route' => 'app_categorie_new', '_controller' => 'App\\Controller\\CategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/chapitre' => [[['_route' => 'app_chapitre_index', '_controller' => 'App\\Controller\\ChapitreController::index'], null, ['GET' => 0], null, true, false, null]],
        '/chapitre/new' => [[['_route' => 'app_chapitre_new', '_controller' => 'App\\Controller\\ChapitreController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/cours' => [[['_route' => 'app_cours_index', '_controller' => 'App\\Controller\\CoursController::index'], null, ['GET' => 0], null, true, false, null]],
        '/cours/new' => [[['_route' => 'app_cours_new', '_controller' => 'App\\Controller\\CoursController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/depense' => [[['_route' => 'app_depense_index', '_controller' => 'App\\Controller\\DepenseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/depense/new' => [[['_route' => 'app_depense_new', '_controller' => 'App\\Controller\\DepenseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/energie' => [[['_route' => 'energy', '_controller' => 'App\\Controller\\EnergieController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/activite' => [[['_route' => 'front_activite_index', '_controller' => 'App\\Controller\\Front\\ActiviteFrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front/activite/new' => [[['_route' => 'front_activite_new', '_controller' => 'App\\Controller\\Front\\ActiviteFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nutrition/aliments' => [[['_route' => 'front_aliment_index', '_controller' => 'App\\Controller\\Front\\AlimentFrontController::index'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/aliments/new' => [[['_route' => 'front_aliment_new', '_controller' => 'App\\Controller\\Front\\AlimentFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/energie' => [[['_route' => 'front_energie_index', '_controller' => 'App\\Controller\\Front\\EnergieController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front/energie/add' => [[['_route' => 'front_energie_add', '_controller' => 'App\\Controller\\Front\\EnergieController::add'], null, ['POST' => 0], null, false, false, null]],
        '/front/categorie' => [[['_route' => 'front_categorie_index', '_controller' => 'App\\Controller\\Front\\FrontCategorieController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front/categorie/new' => [[['_route' => 'front_categorie_new', '_controller' => 'App\\Controller\\Front\\FrontCategorieController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front' => [[['_route' => 'dashboardf', '_controller' => 'App\\Controller\\Front\\FrontController::dashboard'], null, null, null, false, false, null]],
        '/front/depense' => [[['_route' => 'front_depense_index', '_controller' => 'App\\Controller\\Front\\FrontDepenseController::index'], null, ['GET' => 0], null, false, false, null]],
        '/front/depense/new' => [[['_route' => 'front_depense_new', '_controller' => 'App\\Controller\\Front\\FrontDepenseController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nutrition/repas' => [[['_route' => 'front_repas_index', '_controller' => 'App\\Controller\\Front\\FrontRepasController::index'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/repas/new' => [[['_route' => 'front_repas_new', '_controller' => 'App\\Controller\\Front\\FrontRepasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/nutrition/repas/chat' => [[['_route' => 'front_repas_chat', '_controller' => 'App\\Controller\\Front\\FrontRepasController::chat'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/repas/analyze-photo' => [[['_route' => 'front_repas_analyze_photo', '_controller' => 'App\\Controller\\Front\\FrontRepasController::analyzePhoto'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/repas/weekly-analysis' => [[['_route' => 'front_repas_weekly_analysis', '_controller' => 'App\\Controller\\Front\\FrontRepasController::weeklyAnalysis'], null, ['GET' => 0], null, false, false, null]],
        '/nutrition/repas/from-proposal' => [[['_route' => 'front_repas_from_proposal', '_controller' => 'App\\Controller\\Front\\FrontRepasController::fromProposal'], null, ['POST' => 0], null, false, false, null]],
        '/nutrition/mailing/weekly' => [[['_route' => 'front_mailing_weekly', '_controller' => 'App\\Controller\\Front\\MailingController::sendWeekly'], null, ['POST' => 0], null, false, false, null]],
        '/front/objectif' => [[['_route' => 'front_objectif_index', '_controller' => 'App\\Controller\\Front\\ObjectifFrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/front/objectif/new' => [[['_route' => 'front_objectif_new', '_controller' => 'App\\Controller\\Front\\ObjectifFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/front/objectif/health' => [[['_route' => 'health', '_controller' => 'App\\Controller\\Front\\ObjectifFrontController::health'], null, ['GET' => 0], null, false, false, null]],
        '/front/recommandation' => [[['_route' => 'front_recommandation_index', '_controller' => 'App\\Controller\\Front\\RecommandationController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/my-chapters' => [[['_route' => 'chapitre_front_index', '_controller' => 'App\\Controller\\Front\\chapitreFrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/my-chapters/new' => [[['_route' => 'chapitre_front_new', '_controller' => 'App\\Controller\\Front\\chapitreFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/my-courses' => [[['_route' => 'cours_front_index', '_controller' => 'App\\Controller\\Front\\coursFrontController::index'], null, ['GET' => 0], null, true, false, null]],
        '/my-courses/new' => [[['_route' => 'cours_front_new', '_controller' => 'App\\Controller\\Front\\coursFrontController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/objectif' => [[['_route' => 'app_objectif_index', '_controller' => 'App\\Controller\\ObjectifController::index'], null, ['GET' => 0], null, true, false, null]],
        '/back/objectif/new' => [[['_route' => 'app_objectif_new', '_controller' => 'App\\Controller\\ObjectifController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/profile' => [[['_route' => 'app_profile', '_controller' => 'App\\Controller\\ProfileController::index'], null, null, null, false, false, null]],
        '/recommandations' => [[['_route' => 'recommendations', '_controller' => 'App\\Controller\\RecommandationController::index'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/recommandations/search' => [[['_route' => 'recommandation_search', '_controller' => 'App\\Controller\\RecommandationController::searchAjax'], null, ['GET' => 0], null, false, false, null]],
        '/register' => [[['_route' => 'app_register', '_controller' => 'App\\Controller\\RegistrationController::register'], null, null, null, false, false, null]],
        '/repas' => [[['_route' => 'app_repas_index', '_controller' => 'App\\Controller\\RepasController::index'], null, ['GET' => 0], null, false, false, null]],
        '/repas/new' => [[['_route' => 'app_repas_new', '_controller' => 'App\\Controller\\RepasController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/reset-password' => [[['_route' => 'app_forgot_password_request', '_controller' => 'App\\Controller\\ResetPasswordController::request'], null, null, null, false, false, null]],
        '/reset-password/check-email' => [[['_route' => 'app_check_email', '_controller' => 'App\\Controller\\ResetPasswordController::checkEmail'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
        '/stateenergi' => [[['_route' => 'stateenergi', '_controller' => 'App\\Controller\\StateEnergiController::index'], null, null, null, false, false, null]],
        '/user' => [[['_route' => 'app_user_index', '_controller' => 'App\\Controller\\UserController::index'], null, ['GET' => 0], null, false, false, null]],
        '/user/new' => [[['_route' => 'app_user_new', '_controller' => 'App\\Controller\\UserController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/back/api/meteo' => [[['_route' => 'back_api_meteo', '_controller' => 'App\\Controller\\WeatherController::meteo'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/a(?'
                    .'|dmin/(?'
                        .'|reset\\-password\\-request/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:64)'
                                .'|delete(*:77)'
                            .')'
                            .'|(*:85)'
                        .')'
                        .'|user/([^/]++)(?'
                            .'|/(?'
                                .'|edit(*:117)'
                                .'|delete(*:131)'
                            .')'
                            .'|(*:140)'
                        .')'
                    .')'
                    .'|liment/([^/]++)(?'
                        .'|(*:168)'
                        .'|/edit(*:181)'
                        .'|(*:189)'
                    .')'
                .')'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:230)'
                    .'|wdt/([^/]++)(*:250)'
                    .'|profiler/(?'
                        .'|font/([^/\\.]++)\\.woff2(*:292)'
                        .'|([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:329)'
                                .'|router(*:343)'
                                .'|exception(?'
                                    .'|(*:363)'
                                    .'|\\.css(*:376)'
                                .')'
                            .')'
                            .'|(*:386)'
                        .')'
                    .')'
                .')'
                .'|/back/(?'
                    .'|sport/(?'
                        .'|(\\d+)/edit(*:425)'
                        .'|(\\d+)/delete(*:445)'
                    .')'
                    .'|objectif/(?'
                        .'|(\\d+)(*:471)'
                        .'|(\\d+)/edit(*:489)'
                        .'|(\\d+)/delete(*:509)'
                    .')'
                .')'
                .'|/c(?'
                    .'|ategorie/([^/]++)(?'
                        .'|(*:544)'
                        .'|/edit(*:557)'
                        .'|(*:565)'
                    .')'
                    .'|hapitre/(?'
                        .'|my\\-courses/([^/]++)/chapters(*:614)'
                        .'|([^/]++)(?'
                            .'|(*:633)'
                            .'|/edit(*:646)'
                            .'|(*:654)'
                        .')'
                    .')'
                    .'|ours/([^/]++)(?'
                        .'|(*:680)'
                        .'|/(?'
                            .'|edit(*:696)'
                            .'|chapitres(*:713)'
                        .')'
                        .'|(*:722)'
                    .')'
                .')'
                .'|/depense/([^/]++)(?'
                    .'|(*:752)'
                    .'|/edit(*:765)'
                    .'|(*:773)'
                .')'
                .'|/energie/energy/delete/([^/]++)(*:813)'
                .'|/front/(?'
                    .'|activite/([^/]++)(?'
                        .'|(*:851)'
                        .'|/edit(*:864)'
                        .'|(*:872)'
                    .')'
                    .'|energie/([^/]++)/(?'
                        .'|update(*:907)'
                        .'|delete(*:921)'
                    .')'
                    .'|categorie/([^/]++)(?'
                        .'|(*:951)'
                        .'|/edit(*:964)'
                        .'|(*:972)'
                    .')'
                    .'|depense/([^/]++)(?'
                        .'|(*:1000)'
                        .'|/edit(*:1014)'
                        .'|(*:1023)'
                    .')'
                    .'|objectif/(?'
                        .'|(\\d+)(*:1050)'
                        .'|(\\d+)/edit(*:1069)'
                        .'|(\\d+)(*:1083)'
                    .')'
                    .'|recommandation/([^/]++)/delete(*:1123)'
                .')'
                .'|/nutrition/(?'
                    .'|aliments/([^/]++)(?'
                        .'|(*:1167)'
                        .'|/(?'
                            .'|edit(*:1184)'
                            .'|delete(*:1199)'
                        .')'
                    .')'
                    .'|repas/([^/]++)(?'
                        .'|(*:1227)'
                        .'|/(?'
                            .'|edit(*:1244)'
                            .'|delete(*:1259)'
                        .')'
                    .')'
                .')'
                .'|/my\\-c(?'
                    .'|hapters/([^/]++)(?'
                        .'|(*:1299)'
                        .'|/edit(*:1313)'
                        .'|(*:1322)'
                    .')'
                    .'|ourses/([^/]++)(?'
                        .'|(*:1350)'
                        .'|/edit(*:1364)'
                        .'|(*:1373)'
                    .')'
                .')'
                .'|/re(?'
                    .'|commandations/delete/([^/]++)(*:1419)'
                    .'|pas/([^/]++)(?'
                        .'|(*:1443)'
                        .'|/(?'
                            .'|edit(*:1460)'
                            .'|pdf(*:1472)'
                        .')'
                        .'|(*:1482)'
                    .')'
                    .'|set\\-password/reset(?:/([^/]++))?(*:1525)'
                .')'
                .'|/user/([^/]++)(?'
                    .'|(*:1552)'
                    .'|/(?'
                        .'|edit(*:1569)'
                        .'|block(*:1583)'
                    .')'
                    .'|(*:1593)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        64 => [[['_route' => 'admin_reset_password_request_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        77 => [[['_route' => 'admin_reset_password_request_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        85 => [[['_route' => 'admin_reset_password_request_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\ResetPasswordRequestCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        117 => [[['_route' => 'admin_user_edit', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::edit', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'edit'], ['entityId'], ['GET' => 0, 'POST' => 1, 'PATCH' => 2], null, false, false, null]],
        131 => [[['_route' => 'admin_user_delete', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::delete', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'delete'], ['entityId'], ['POST' => 0], null, false, false, null]],
        140 => [[['_route' => 'admin_user_detail', '_locale' => 'en', '_controller' => 'App\\Controller\\Admin\\UserCrudController::detail', 'routeCreatedByEasyAdmin' => true, 'dashboardControllerFqcn' => 'App\\Controller\\Admin\\DashboardController', 'crudControllerFqcn' => 'App\\Controller\\Admin\\UserCrudController', 'crudAction' => 'detail'], ['entityId'], ['GET' => 0], null, false, true, null]],
        168 => [[['_route' => 'app_aliment_show', '_controller' => 'App\\Controller\\AlimentController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        181 => [[['_route' => 'app_aliment_edit', '_controller' => 'App\\Controller\\AlimentController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        189 => [[['_route' => 'app_aliment_delete', '_controller' => 'App\\Controller\\AlimentController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        230 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        250 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        292 => [[['_route' => '_profiler_font', '_controller' => 'web_profiler.controller.profiler::fontAction'], ['fontName'], null, null, false, false, null]],
        329 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        343 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        363 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        376 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        386 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        425 => [[['_route' => 'back_sport_edit', '_controller' => 'App\\Controller\\ActivitePhysiqueController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        445 => [[['_route' => 'back_sport_delete', '_controller' => 'App\\Controller\\ActivitePhysiqueController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        471 => [[['_route' => 'app_objectif_show', '_controller' => 'App\\Controller\\ObjectifController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        489 => [[['_route' => 'app_objectif_edit', '_controller' => 'App\\Controller\\ObjectifController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        509 => [[['_route' => 'app_objectif_delete', '_controller' => 'App\\Controller\\ObjectifController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        544 => [[['_route' => 'app_categorie_show', '_controller' => 'App\\Controller\\CategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        557 => [[['_route' => 'app_categorie_edit', '_controller' => 'App\\Controller\\CategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        565 => [[['_route' => 'app_categorie_delete', '_controller' => 'App\\Controller\\CategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        614 => [[['_route' => 'chapitre_front_by_cours', '_controller' => 'App\\Controller\\ChapitreController::byCoursFront'], ['id'], ['GET' => 0], null, false, false, null]],
        633 => [[['_route' => 'app_chapitre_show', '_controller' => 'App\\Controller\\ChapitreController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        646 => [[['_route' => 'app_chapitre_edit', '_controller' => 'App\\Controller\\ChapitreController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        654 => [[['_route' => 'app_chapitre_delete', '_controller' => 'App\\Controller\\ChapitreController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        680 => [[['_route' => 'app_cours_show', '_controller' => 'App\\Controller\\CoursController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        696 => [[['_route' => 'app_cours_edit', '_controller' => 'App\\Controller\\CoursController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        713 => [[['_route' => 'app_chapitre_by_cours', '_controller' => 'App\\Controller\\CoursController::chapitresByCours'], ['id'], ['GET' => 0], null, false, false, null]],
        722 => [[['_route' => 'app_cours_delete', '_controller' => 'App\\Controller\\CoursController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        752 => [[['_route' => 'app_depense_show', '_controller' => 'App\\Controller\\DepenseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        765 => [[['_route' => 'app_depense_edit', '_controller' => 'App\\Controller\\DepenseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        773 => [[['_route' => 'app_depense_delete', '_controller' => 'App\\Controller\\DepenseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        813 => [[['_route' => 'energy_delete', '_controller' => 'App\\Controller\\EnergieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        851 => [[['_route' => 'front_activite_show', '_controller' => 'App\\Controller\\Front\\ActiviteFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        864 => [[['_route' => 'front_activite_edit', '_controller' => 'App\\Controller\\Front\\ActiviteFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        872 => [[['_route' => 'front_activite_delete', '_controller' => 'App\\Controller\\Front\\ActiviteFrontController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        907 => [[['_route' => 'front_energie_update', '_controller' => 'App\\Controller\\Front\\EnergieController::update'], ['id'], ['POST' => 0], null, false, false, null]],
        921 => [[['_route' => 'front_energie_delete', '_controller' => 'App\\Controller\\Front\\EnergieController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        951 => [[['_route' => 'front_categorie_show', '_controller' => 'App\\Controller\\Front\\FrontCategorieController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        964 => [[['_route' => 'front_categorie_edit', '_controller' => 'App\\Controller\\Front\\FrontCategorieController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        972 => [[['_route' => 'front_categorie_delete', '_controller' => 'App\\Controller\\Front\\FrontCategorieController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1000 => [[['_route' => 'front_depense_show', '_controller' => 'App\\Controller\\Front\\FrontDepenseController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1014 => [[['_route' => 'front_depense_edit', '_controller' => 'App\\Controller\\Front\\FrontDepenseController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1023 => [[['_route' => 'front_depense_delete', '_controller' => 'App\\Controller\\Front\\FrontDepenseController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1050 => [[['_route' => 'front_objectif_show', '_controller' => 'App\\Controller\\Front\\ObjectifFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1069 => [[['_route' => 'front_objectif_edit', '_controller' => 'App\\Controller\\Front\\ObjectifFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1083 => [[['_route' => 'front_objectif_delete', '_controller' => 'App\\Controller\\Front\\ObjectifFrontController::delete'], ['id'], ['POST' => 0, 'DELETE' => 1], null, false, true, null]],
        1123 => [[['_route' => 'front_recommandation_delete', '_controller' => 'App\\Controller\\Front\\RecommandationController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1167 => [[['_route' => 'front_aliment_show', '_controller' => 'App\\Controller\\Front\\AlimentFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1184 => [[['_route' => 'front_aliment_edit', '_controller' => 'App\\Controller\\Front\\AlimentFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1199 => [[['_route' => 'front_aliment_delete', '_controller' => 'App\\Controller\\Front\\AlimentFrontController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1227 => [[['_route' => 'front_repas_show', '_controller' => 'App\\Controller\\Front\\FrontRepasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1244 => [[['_route' => 'front_repas_edit', '_controller' => 'App\\Controller\\Front\\FrontRepasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1259 => [[['_route' => 'front_repas_delete', '_controller' => 'App\\Controller\\Front\\FrontRepasController::delete'], ['id'], ['POST' => 0], null, false, false, null]],
        1299 => [[['_route' => 'chapitre_front_show', '_controller' => 'App\\Controller\\Front\\chapitreFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1313 => [[['_route' => 'chapitre_front_edit', '_controller' => 'App\\Controller\\Front\\chapitreFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1322 => [[['_route' => 'chapitre_front_delete', '_controller' => 'App\\Controller\\Front\\chapitreFrontController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1350 => [[['_route' => 'cours_front_show', '_controller' => 'App\\Controller\\Front\\coursFrontController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1364 => [[['_route' => 'cours_front_edit', '_controller' => 'App\\Controller\\Front\\coursFrontController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1373 => [[['_route' => 'cours_front_delete', '_controller' => 'App\\Controller\\Front\\coursFrontController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1419 => [[['_route' => 'app_recommandation_delete', '_controller' => 'App\\Controller\\RecommandationController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1443 => [[['_route' => 'app_repas_show', '_controller' => 'App\\Controller\\RepasController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1460 => [[['_route' => 'app_repas_edit', '_controller' => 'App\\Controller\\RepasController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1472 => [[['_route' => 'app_repas_pdf', '_controller' => 'App\\Controller\\RepasController::exportPdf'], ['id'], ['GET' => 0], null, false, false, null]],
        1482 => [[['_route' => 'app_repas_delete', '_controller' => 'App\\Controller\\RepasController::delete'], ['id'], ['POST' => 0], null, false, true, null]],
        1525 => [[['_route' => 'app_reset_password', 'token' => null, '_controller' => 'App\\Controller\\ResetPasswordController::reset'], ['token'], null, null, false, true, null]],
        1552 => [[['_route' => 'app_user_show', '_controller' => 'App\\Controller\\UserController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        1569 => [[['_route' => 'app_user_edit', '_controller' => 'App\\Controller\\UserController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        1583 => [[['_route' => 'app_user_block', '_controller' => 'App\\Controller\\UserController::block'], ['id'], ['POST' => 0], null, false, false, null]],
        1593 => [
            [['_route' => 'app_user_delete', '_controller' => 'App\\Controller\\UserController::delete'], ['id'], ['POST' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
