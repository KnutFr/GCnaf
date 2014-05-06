<?php

namespace GCNAF\NAFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Finder\Iterator\DateRangeFilterIterator;
use GCNAF\NAFBundle\Entity\Profil;
use GCNAF\NAFBundle\Entity\Ressource;
use \Symfony\Component\Validator\Constraints\Date ;
use GCNAF\NAFBundle\Form\Browser;
use GCNAF\NAFBundle\Form\Fonctions;


class RessourceFormController extends Controller {

    // 1 modifier salarie
    public function editerAction($id) {
        $logger = $this->get('logger');
        $message = '';
        $civilites = array();
        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $this->getDoctrine()->getRepository('GCNAFNAFBundle:Profil')->findAll();
        foreach ($query as $ref) {
            $civilites[$ref->getIdProf()] = $ref->getNomProf();
        }
        $ressource = $em->find('GCNAFNAFBundle:Ressource', $id);
        if (!$ressource) {
            $message = 'Aucun Salarie trouve';
        }
        $formBuilder = $this->createFormBuilder($ressource);
        $formBuilder
                ->add('cin', 'text', array('label' => 'CIN :', 'required' => true))
                ->add('nom', 'text', array('label' => 'Nom :', 'required' => true))
                ->add('prenom', 'text', array('label' => 'Prénom :', 'required' => true))
                ->add('login', 'text', array('label' => 'Identifiant : ', 'required' => true))
                ->add('pwd', 'password', array('label' => 'Mot de passe :', 'required' => true))
                ->add('dateEmb', 'date', array('widget' => 'single_text', 'label' => 'Date Embauche :', 'format' => 'yyyy-MM-dd', 'attr' => array('title' => 'Date (jj/mm/aaaa)'), 'required' => true))
                ->add('dateSor', 'date', array('widget' => 'single_text', 'label' => 'Date Sortie :', 'format' => 'yyyy-MM-dd', 'attr' => array('title' => 'Date (jj/mm/aaaa)'), 'required' => false))
                ->add('mail', 'email', array('label' => 'Adresse mail :', 'required' => true))
                ->add('idProf', 'choice', array('choices' => $civilites, 'label' => 'Profil :', 'empty_value' => 'Choisissez un profil', 'required' => true))
                ->add('btnModifier', 'submit', array('label' => 'Modifier', 'attr' => array('class' => 'btnsubmit')));
        
        $logger->info('RessourceFormControlleur(aditer) : Erreur *********************************************** ');
        
        $form = $formBuilder->getForm();
        $request = $this->container->get('request');
        $logger->error('RessourceFormControlleur : validation2 = '.$request->getMethod());
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            $form_user = $form->getData();
            $dateEmb = '';
            $Fct = new Fonctions();
            $dateEmb = $Fct->formatterDateAAAAMMJJ($logger, $form_user->getdateEmb());
            $logger->error('RessourceFormControlleur : dateEmb = '.$dateEmb);
            $val = new \DateTime($dateEmb);
            $form_user->setdateEmb($val);            
            
            if ($form->isValid()) {
                $dateD = $form_user->getDateEmb();
                $dateF = $form_user->getDateSor();
                if ($dateF != null) {
                    if ($dateD < $dateF) {
                        $ressource->setdateEmb($val);
                        $em->persist($ressource);
                        $em->flush();
                        return new RedirectResponse($this->container->get('router')->generate('GCNAFNAFBundle_salaries'));
                    } else {
                        $message = 'La date Embauche doit etre inferieure a la date de sortie';
                    }                    
                }
                else
                {
                    //$logger->error('RessourceFormControlleur : validation21 = '.$val);
                    //$ressource->setdateEmb($val);
                    //$logger->error('RessourceFormControlleur : validation22 = '.$ressource->getdateEmb());
                    $em->persist($ressource);
                    $em->flush();
                    return new RedirectResponse($this->container->get('router')->generate('GCNAFNAFBundle_salaries'));
                }
            }
        }
        return $this->container->get('templating')->renderResponse(
                        'GCNAFNAFBundle:Ressource:editerRessource.html.twig', array(
                    'form' => $form->createView(),
                    'message' => $message,
        ));
    }

// fin modification
    //2 fct ajouter jour
    public function ajouterAction() {
        $logger = $this->get('logger');
        $message = '';
        $dateJour= '';
        $dateJour = new \DateTime('now');
        $civilites = array();
        $em = $this->container->get('doctrine')->getEntityManager();
        $query = $this->getDoctrine()->getRepository('GCNAFNAFBundle:Profil')->findAll();
        foreach ($query as $ref) {
            $civilites[$ref->getIdProf()] = $ref->getNomProf();
        }
        $ressource = new Ressource();
        $formBuilder = $this->createFormBuilder($ressource);
         
        $formBuilder
                ->add('cin', 'text', array('label' => 'CIN :'))
                ->add('nom', 'text', array('label' => 'Nom :'))
                ->add('prenom', 'text', array('label' => 'Prénom :'))
                ->add('login', 'text', array('label' => 'Identifiant : '))
                ->add('pwd', 'password', array('label' => 'Mot de passe :'))
                ->add('dateEmb', 'date', array('widget' => 'single_text', 'label' => 'Date Embauche :', 'format' => 'yyyy-MM-dd', 'attr' => array('title' => 'Date (jj/mm/aaaa)')))
                ->add('mail', 'email', array('label' => 'Adresse mail :'))
                ->add('idProf', 'choice', array('choices' => $civilites, 'label' => 'Profil :', 'empty_value' => 'Choisissez un profil'))
                ->add('btnAjouter', 'submit', array('label' => 'Ajouter', 'attr' => array('class' => 'btnsubmit')))
                ->add('btnEffacer', 'reset', array('label' => 'Effacer', 'attr' => array('class' => 'btnsubmit')));

        
        $logger->info('RessourceFormControlleur(ajouter) : Erreur *********************************************** ');
    
        $form = $formBuilder->getForm();
        /* $data = $request->request->all(); */
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            
            $form->bind($request);
            $form_user = $form->getData();
            $dateEmb = '';
            $Fct = new Fonctions();
            $dateEmb = $Fct->formatterDateAAAAMMJJ($logger, $form_user->getdateEmb());
            $logger->error('RessourceFormControlleur(ajouter) : dateEmb2 = '.$dateEmb);
            $val = new \DateTime($dateEmb);
            $ressource->setdateEmb($val);

            //$form->bind($request);
            if ($form->isValid()) {
                $ressource->setdateEmb($val);
                $em->persist($ressource);
                $em->flush();
                return new RedirectResponse($this->container->get('router')->generate('GCNAFNAFBundle_salaries'));
            }
        }
        return $this->container->get('templating')->renderResponse(
                        'GCNAFNAFBundle:Ressource:ajouterRessource.html.twig', array(
                    'form' => $form->createView(), 'message' => $message, 'dateJour' => $dateJour,
        ));
    }

// fin l'jout   	  	
}

//end classe
