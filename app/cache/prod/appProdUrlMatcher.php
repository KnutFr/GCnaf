<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // GCNAFNAFBundle_chef_equipe_search
                if ($pathinfo === '/accueil/AffectationSalarie/Recherche') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\AffectationController::searchAction',  '_route' => 'GCNAFNAFBundle_chef_equipe_search',);
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

                // GCNAFNAFBundle_demandes_conges_searchByear
                if ($pathinfo === '/accueil/DemandesConges/searchByYear') {
                    return array (  '_controller' => 'GCNAF\\NAFBundle\\Controller\\DemandesController::searchByYearAction',  '_route' => 'GCNAFNAFBundle_demandes_conges_searchByear',);
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

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
