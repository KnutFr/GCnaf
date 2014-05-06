<?php

namespace GCNAF\NAFBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use GCNAF\NAFBundle\Entity\Ressource;
use GCNAF\NAFBundle\Form\LoginForm;

class DefaultController extends ContainerAware {

    public function loginAction() {
        $message = '';
        $user = new Ressource();
        $form = $this->container->get('form.factory')->create(new LoginForm(), $user);

        $request = $this->container->get('request');

        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $em = $this->container->get('doctrine')->getEntityManager();
                $repository = $em->getRepository('GCNAFNAFBundle:Ressource');
                $form_user = $form->getData();
                $mon_user = $repository->findOneByLogin($form_user->getLogin());

                if (!$repository->findOneByLogin($form_user->getLogin()))
                    return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Default:index.html.twig', array('form' => $form->createView(), 'message' => 'Votre Login est incorrect '
                                    ,));
                else {
                    if ($mon_user->getPwd() == $form_user->getPwd()) {
                        $profil = $mon_user->getIdProf();
                        $nom = $mon_user->getNom();
                        $pre = $mon_user->getPrenom();
                        $sess = $request->getSession();
                        $sess->set( 'nom', $nom);
                        $sess->set( 'prenom', $pre);
                        $sess->set( 'login', $mon_user->getLogin());
                        $sess->set( 'profilCod', $profil);
                        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Accueil:index.html.twig', array('nom' => $nom, 'prenom' => $pre, 'message' =>'Bienvenu'));
                    }// end if 
                    else
                        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Default:index.html.twig', array('form' => $form->createView(), 'message' => 'Le Mot de passe est incorrect',));
                }//end else
            } //end if 	
        } //end if

        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Default:index.html.twig', array('form' => $form->createView(), 'message' => $message
                        ,));
    }
}   
?>
