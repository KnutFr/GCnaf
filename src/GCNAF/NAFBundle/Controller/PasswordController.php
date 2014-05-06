<?php

namespace GCNAF\NAFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Finder\Iterator\DateRangeFilterIterator;
use GCNAF\NAFBundle\Form\Browser;
use GCNAF\NAFBundle\Form\Fonctions;
use GCNAF\NAFBundle\Entity\Ressource;
use GCNAF\NAFBundle\Form\PasswordForm;

class PasswordController extends Controller {

    public function changePasswordAction() {
        $message = '';        
        $user = new Ressource();
        $logger = $this->container->get('logger');
        $em = $this->container->get('doctrine')->getEntityManager();
        //$form = $this->container->get('form.factory')->create(new PasswordForm());
        
        $formBuilder = $this->createFormBuilder();        
        $formBuilder
            ->add('oldPassword', 'password', array('label' => 'Ancien mot de Passe : '))
            ->add('newPassword', 'password', array('label' => 'Nouveau mot de Passe : '))
            ->add('confirmPassword', 'password', array('label' => 'Confirmation mot de Passe : '))
            ->add('btnChange', 'submit', array('label' => 'Changer', 'attr' => array('class' => 'btnsubmit'))
        );        
        $form = $formBuilder->getForm();            
        
        $request = $this->get('request');
        $session = $request->getSession();
        $logger->info('PasswordController(changePasswordAction) : login = '.$session->get('login'));

        if ($request->getMethod() == 'POST') {            
            //$form->bind($request);
            $form->handleRequest($request);
            $oldPassword = $form->get('oldPassword')->getData();
            $logger->info('PasswordController(changePasswordAction) : oldPassword     = '.$oldPassword);
            $newPassword = $form->get('newPassword')->getData();
            $confirmPassword = $form->get('confirmPassword')->getData();
            
            $logger->info('PasswordController(changePasswordAction) : newPassword     = '.$newPassword);
            $logger->info('PasswordController(changePasswordAction) : confirmPassword = '.$confirmPassword);
            // Vérification de la confirmation du mot de passe
            if ($newPassword != $confirmPassword)
                    return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Password:index.html.twig', array('form' => $form->createView(), 'message' => 'La confirmation du mot de passe est incorrecte.',));

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $repository = $em->getRepository('GCNAFNAFBundle:Ressource');
                $mon_user = $repository->findOneByLogin($session->get('login'));

                if (!$repository->findOneByLogin($session->get('login')))
                    return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Password:index.html.twig', array('form' => $form->createView(), 'message' => 'Votre Login est incorrect ',));
                else {
                    // Si l'ancien mot de passe est correct, on continue
                    if ($mon_user->getPwd() == $oldPassword) {
                        $mon_user->setPwd($newPassword);
                        $em->persist($mon_user);
                        $em->flush();                        
                        $nom = $session->get('nom');
                        $prenom = $session->get('prenom');
                        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Accueil:index.html.twig', array('nom' => $nom, 'prenom' => $prenom, 'message' => 'Le mot de passe a été changé avec succès.',));
                    }// end if 
                    else
                        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Password:index.html.twig', array('form' => $form->createView(), 'message' => 'Le Mot de passe est incorrect',));
                }//end else
            } //end if 	
        } //end if
        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Password:index.html.twig', array('form' => $form->createView(), 'message' => $message,));
    }
   
//end funct
}

?>
