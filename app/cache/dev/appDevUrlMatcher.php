<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/accueil')) {
            // GCNAFNAFBundle_accueil
            if (rtrim($pathinfo, '/') === '/accueil') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'GCNAFNAFBundle_accueil');
                }

                return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DefaultController::loginAction',  '_route' => 'GCNAFNAFBundle_accueil',);
            }

            // GCNAFNAFBundle_goout
            if ($pathinfo === '/accueil/goout') {
                return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DefaultController::loginAction',  '_route' => 'GCNAFNAFBundle_goout',);
            }

            if (0 === strpos($pathinfo, '/accueil/jours')) {
                // GCNAFNAFBundle_jours
                if (0 === strpos($pathinfo, '/accueil/jours/listerPagination') && preg_match('#^/accueil/jours/listerPagination(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_jours')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\JoursFeriesController::listerPaginationAction',  'page' => 1,));
                }

                // GCNAFNAFBundle_jours_searchByear
                if ($pathinfo === '/accueil/jours/searchByYear') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\JoursFeriesController::searchByYearAction',  '_route' => 'GCNAFNAFBundle_jours_searchByear',);
                }

                // GCNAFNAFBundle_ajouter
                if ($pathinfo === '/accueil/jours/ajouter') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\FeriesController::ajouterAction',  '_route' => 'GCNAFNAFBundle_ajouter',);
                }

                // GCNAFNAFBundle_modifier
                if (0 === strpos($pathinfo, '/accueil/jours/modifier') && preg_match('#^/accueil/jours/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_modifier')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\FeriesController::editerAction',));
                }

                // GCNAFNAFBundle_supprimer
                if (0 === strpos($pathinfo, '/accueil/jours/supprimer') && preg_match('#^/accueil/jours/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_supprimer')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\JoursFeriesController::supprimerAction',));
                }

            }

            if (0 === strpos($pathinfo, '/accueil/salaries')) {
                // GCNAFNAFBundle_salaries
                if (0 === strpos($pathinfo, '/accueil/salaries/listeRessourcePagination') && preg_match('#^/accueil/salaries/listeRessourcePagination(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_salaries')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\RessourceController::listeRessourcePaginationAction',  'page' => 1,));
                }

                // GCNAFNAFBundle_salaries_ajouter
                if ($pathinfo === '/accueil/salaries/ajouter') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\RessourceFormController::ajouterAction',  '_route' => 'GCNAFNAFBundle_salaries_ajouter',);
                }

                // GCNAFNAFBundle_salaries_modifier
                if (0 === strpos($pathinfo, '/accueil/salaries/modifier') && preg_match('#^/accueil/salaries/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_salaries_modifier')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\RessourceFormController::editerAction',));
                }

                if (0 === strpos($pathinfo, '/accueil/salaries/s')) {
                    // GCNAFNAFBundle_salaries_supprimer
                    if (0 === strpos($pathinfo, '/accueil/salaries/supprimer') && preg_match('#^/accueil/salaries/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_salaries_supprimer')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\RessourceController::supprimerAction',));
                    }

                    // GCNAFNAFBundle_salaries_search
                    if ($pathinfo === '/accueil/salaries/search') {
                        return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\RessourceController::rechercherAction',  '_route' => 'GCNAFNAFBundle_salaries_search',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/accueil/AffectationSalarie')) {
                // GCNAFNAFBundle_chef_equipe
                if ($pathinfo === '/accueil/AffectationSalarie') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\AffectationController::indexAction',  '_route' => 'GCNAFNAFBundle_chef_equipe',);
                }

                // GCNAFNAFBundle_chef_equipe_supp
                if (0 === strpos($pathinfo, '/accueil/AffectationSalarie/supprimer') && preg_match('#^/accueil/AffectationSalarie/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_equipe_supp')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\AffectationController::supprimerAction',));
                }

                // GCNAFNAFBundle_chef_equipe_searchs
                if ($pathinfo === '/accueil/AffectationSalarie/Recherche') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\AffectationController::searchAction',  '_route' => 'GCNAFNAFBundle_chef_equipe_searchs',);
                }

            }

            if (0 === strpos($pathinfo, '/accueil/DemandesConges')) {
                // GCNAFNAFBundle_demandes_conges
                if (0 === strpos($pathinfo, '/accueil/DemandesConges/index') && preg_match('#^/accueil/DemandesConges/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_demandes_conges')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::indexAction',  'page' => 1,));
                }

                // GCNAFNAFBundle_demandes_conges_modifier
                if (0 === strpos($pathinfo, '/accueil/DemandesConges/modifier') && preg_match('#^/accueil/DemandesConges/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_demandes_conges_modifier')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::editerAction',));
                }

                if (0 === strpos($pathinfo, '/accueil/DemandesConges/s')) {
                    // GCNAFNAFBundle_demandes_conges_supprimer
                    if (0 === strpos($pathinfo, '/accueil/DemandesConges/supprimer') && preg_match('#^/accueil/DemandesConges/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_demandes_conges_supprimer')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::supprimerAction',));
                    }

                    // GCNAFNAFBundle_demandes_conges_searchByear
                    if ($pathinfo === '/accueil/DemandesConges/searchByYear') {
                        return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::searchByYearAction',  '_route' => 'GCNAFNAFBundle_demandes_conges_searchByear',);
                    }

                }

                // GCNAFNAFBundle_demandes_conges_ajouter
                if ($pathinfo === '/accueil/DemandesConges/ajouter') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::ajouterAction',  '_route' => 'GCNAFNAFBundle_demandes_conges_ajouter',);
                }

                // GCNAFNAFBundle_admin_AccorderDemande
                if (0 === strpos($pathinfo, '/accueil/DemandesConges/AccorderDemande') && preg_match('#^/accueil/DemandesConges/AccorderDemande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_admin_AccorderDemande')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::AccorderDemandeAction',));
                }

                // GCNAFNAFBundle_admin_RefuserDemande
                if (0 === strpos($pathinfo, '/accueil/DemandesConges/RefuserDemande') && preg_match('#^/accueil/DemandesConges/RefuserDemande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_admin_RefuserDemande')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::RefuserDemandeAction',));
                }

            }

            if (0 === strpos($pathinfo, '/accueil/CompteurSolde')) {
                // GCNAFNAFBundle_compteur_solde
                if (0 === strpos($pathinfo, '/accueil/CompteurSolde/index') && preg_match('#^/accueil/CompteurSolde/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_compteur_solde')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\SoldeController::indexAction',  'page' => 1,));
                }

                // GCNAFNAFBundle_compteur_solde_searchByear
                if ($pathinfo === '/accueil/CompteurSolde/searchsolde') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\SoldeController::searchSoldeAction',  '_route' => 'GCNAFNAFBundle_compteur_solde_searchByear',);
                }

                // GCNAFNAFBundle_compteur_solde_modifier
                if (0 === strpos($pathinfo, '/accueil/CompteurSolde/modifier') && preg_match('#^/accueil/CompteurSolde/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_compteur_solde_modifier')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\SoldeController::editerAction',));
                }

                // GCNAFNAFBundle_compteur_solde_initialiser
                if ($pathinfo === '/accueil/CompteurSolde/initialisation') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\SoldeController::initialiserAction',  '_route' => 'GCNAFNAFBundle_compteur_solde_initialiser',);
                }

            }

            // GCNAFNAFBundle_change_password
            if ($pathinfo === '/accueil/Password/changePassword') {
                return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\PasswordController::changePasswordAction',  '_route' => 'GCNAFNAFBundle_change_password',);
            }

            if (0 === strpos($pathinfo, '/accueil/UtilisateurSimple')) {
                // GCNAFNAFBundle_user_simple_demandes
                if (0 === strpos($pathinfo, '/accueil/UtilisateurSimple/demandes') && preg_match('#^/accueil/UtilisateurSimple/demandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_user_simple_demandes')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\UserController::demandesAction',));
                }

                // GCNAFNAFBundle_user_simple_recherche
                if ($pathinfo === '/accueil/UtilisateurSimple/SearchDemande') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\UserController::SearchDemandeAction',  '_route' => 'GCNAFNAFBundle_user_simple_recherche',);
                }

                // GCNAFNAFBundle_user_simple_ajouter
                if ($pathinfo === '/accueil/UtilisateurSimple/ajouter') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\UserController::ajouterAction',  '_route' => 'GCNAFNAFBundle_user_simple_ajouter',);
                }

                // GCNAFNAFBundle_user_simple_modifier
                if (0 === strpos($pathinfo, '/accueil/UtilisateurSimple/modifier') && preg_match('#^/accueil/UtilisateurSimple/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_user_simple_modifier')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\UserController::editerAction',));
                }

                // GCNAFNAFBundle_user_simple_supprimer
                if (0 === strpos($pathinfo, '/accueil/UtilisateurSimple/supprimer') && preg_match('#^/accueil/UtilisateurSimple/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_user_simple_supprimer')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\UserController::supprimerAction',));
                }

                // GCNAFNAFBundle_user_simple_solde
                if (0 === strpos($pathinfo, '/accueil/UtilisateurSimple/index') && preg_match('#^/accueil/UtilisateurSimple/index(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_user_simple_solde')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\UserController::indexAction',  'page' => 1,));
                }

                // GCNAFNAFBundle_user_simple_solde_search
                if ($pathinfo === '/accueil/UtilisateurSimple/searchsolde') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\UserController::searchSoldeAction',  '_route' => 'GCNAFNAFBundle_user_simple_solde_search',);
                }

                if (0 === strpos($pathinfo, '/accueil/UtilisateurSimple/Impr')) {
                    // GCNAFNAFBundle_impression_pdf
                    if ($pathinfo === '/accueil/UtilisateurSimple/ImpressionFormatPDF') {
                        return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ImprimerController::ImprimerSoldeAction',  '_route' => 'GCNAFNAFBundle_impression_pdf',);
                    }

                    // GCNAFNAFBundle_impression_demande_pdf
                    if (0 === strpos($pathinfo, '/accueil/UtilisateurSimple/ImprimerDemande') && preg_match('#^/accueil/UtilisateurSimple/ImprimerDemande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_impression_demande_pdf')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ImprimerController::ImprimerDemandeAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/accueil/ChefEquipe')) {
                // GCNAFNAFBundle_chef_equipe_index
                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/index') && preg_match('#^/accueil/ChefEquipe/index/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_equipe_index')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::indexAction',));
                }

                // GCNAFNAFBundle_chef_equipe_search
                if ($pathinfo === '/accueil/ChefEquipe/searchEquipe') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::searchEquipeAction',  '_route' => 'GCNAFNAFBundle_chef_equipe_search',);
                }

                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/Demande')) {
                    // GCNAFNAFBundle_Userequipe_demandes
                    if (0 === strpos($pathinfo, '/accueil/ChefEquipe/DemandesUsers') && preg_match('#^/accueil/ChefEquipe/DemandesUsers/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_Userequipe_demandes')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::DemandesUsersAction',));
                    }

                    // GCNAFNAFBundle_Userequipe_demandes_search
                    if ($pathinfo === '/accueil/ChefEquipe/DemandeUserParEtat') {
                        return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::DemandeUserParEtatAction',  '_route' => 'GCNAFNAFBundle_Userequipe_demandes_search',);
                    }

                }

                // GCNAFNAFBundle_chef_AccorderDemande
                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/AccorderDemande') && preg_match('#^/accueil/ChefEquipe/AccorderDemande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_AccorderDemande')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::AccorderDemandeAction',));
                }

                // GCNAFNAFBundle_chef_RefuserDemande
                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/RefuserDemande') && preg_match('#^/accueil/ChefEquipe/RefuserDemande/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_RefuserDemande')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::RefuserDemandeAction',));
                }

                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/s')) {
                    // GCNAFNAFBundle_chef_equipe_solde
                    if (0 === strpos($pathinfo, '/accueil/ChefEquipe/solde') && preg_match('#^/accueil/ChefEquipe/solde(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_equipe_solde')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::soldeAction',  'page' => 1,));
                    }

                    // GCNAFNAFBundle_chef_equipe_solde_search
                    if ($pathinfo === '/accueil/ChefEquipe/searchsolde') {
                        return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::searchSoldeAction',  '_route' => 'GCNAFNAFBundle_chef_equipe_solde_search',);
                    }

                }

                // GCNAFNAFBundle_chef_equipe_demandes
                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/demandes') && preg_match('#^/accueil/ChefEquipe/demandes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_equipe_demandes')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::demandesAction',));
                }

                // GCNAFNAFBundle_chef_equipe_demandes_recherche
                if ($pathinfo === '/accueil/ChefEquipe/SearchDemande') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::SearchDemandeAction',  '_route' => 'GCNAFNAFBundle_chef_equipe_demandes_recherche',);
                }

                // GCNAFNAFBundle_chef_equipe_demandes_modifier
                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/modifier') && preg_match('#^/accueil/ChefEquipe/modifier/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_equipe_demandes_modifier')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::editerAction',));
                }

                // GCNAFNAFBundle_chef_equipe_demandes_supprimer
                if (0 === strpos($pathinfo, '/accueil/ChefEquipe/supprimer') && preg_match('#^/accueil/ChefEquipe/supprimer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'GCNAFNAFBundle_chef_equipe_demandes_supprimer')), array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::supprimerAction',));
                }

                // GCNAFNAFBundle_chef_equipe_demandes_ajouter
                if ($pathinfo === '/accueil/ChefEquipe/Ajouter') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\ChefController::AjouterAction',  '_route' => 'GCNAFNAFBundle_chef_equipe_demandes_ajouter',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
