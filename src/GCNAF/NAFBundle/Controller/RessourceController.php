<?php

namespace GCNAF\NAFBundle\Controller;

use Symfony\Component\DependencyInjection\ContainerAware;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use GCNAF\NAFBundle\Entity\Ressource;
use GCNAF\NAFBundle\Entity\Profil;
use GCNAF\NAFBundle\Form\RessourceForm;
use GCNAF\NAFBundle\Form\SearchRessourceForm;

class RessourceController extends ContainerAware

{	// 1 affichage par pagination 
	public function listeRessourcePaginationAction($page)
    {
	 $form = $this->container->get('form.factory')->create(new SearchRessourceForm());
	 $em = $this->container->get('doctrine')->getEntityManager();	 
	 // requete 1
	 $qb = $em->createQueryBuilder();
	 $qb->select('r.id,r.cin,r.nom,r.prenom,r.login,r.pwd,r.dateEmb,r.dateSor,r.mail,r.idProf,p.idProf,p.nomProf')
		->from('GCNAFNAFBundle:Ressource', 'r')
		->innerJoin('GCNAFNAFBundle:Profil ','p')
		->where('p.idProf = r.idProf')				
                ->orderBy('r.nom', 'ASC');
        $query = $qb->getQuery();
        $total = $query->getResult();
        $total_jours = count($total);
        $jours_per_page = 20;
        $last_page = ceil($total_jours / $jours_per_page);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
        
        $qbnew = $em->createQueryBuilder();
	 $qbnew->select('r.id,r.cin,r.nom,r.prenom,r.login,r.pwd,r.dateEmb,r.dateSor,r.mail,r.idProf,p.idProf,p.nomProf')
                ->from('GCNAFNAFBundle:Ressource', 'r')
           	   ->innerJoin('GCNAFNAFBundle:Profil ','p')
                ->where('p.idProf = r.idProf')
                ->setFirstResult(($page * $jours_per_page) - $jours_per_page)
                ->setMaxResults($jours_per_page)
                ->orderBy('r.nom', 'ASC');
        $querynew = $qbnew->getQuery();
        $total_fin = $querynew->getResult();
        $Nb_per_affiche = $jours_per_page;
        if ($Nb_per_affiche > $total_jours) {$Nb_per_affiche = $total_jours;}
                
        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Ressource:listeRessourcePagination.html.twig', array(
                    'entities' => $total_fin,
                    'last_page' => $last_page,
                    'previous_page' => $previous_page,
                    'current_page' => $page,
                    'next_page' => $next_page,
                    'total_articles' => $total_jours,
                    'Nb_per_affiche' => $Nb_per_affiche,
                    'form' => $form->createView(),
        ));
    }

//end pagination
    //l'ajout
    public function ajouterAction() {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();
        $jour = new Ressource();
        $form = $this->container->get('form.factory')->create(new RessourceForm(), $jour);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $form_user = $form->getData();
                $dateD = $form_user->getDateEmb();
                $dateF = $form_user->getDateSor();

                if ($dateD < $dateF) {
                    $em->persist($jour);
                    $em->flush();
                    $message = 'Ressource ajoute avec succes !';
                } else {
                    $message = 'La date Embauche doit etre inferieure a la date de sortie';
                }
            }
        }
        return $this->container->get('templating')->renderResponse(
                        'GCNAFNAFBundle:Ressource:ajouterRessource.html.twig', array(
                    'form' => $form->createView(),
                    'message' => $message,
        ));
    }

    // and update
    public function editerAction($id) {
        $message = '';
        $em = $this->container->get('doctrine')->getEntityManager();
        if (isset($id)) {
            // modification d'un ressource existant : on recherche ses donn�es
            $jour = $em->find('GCNAFNAFBundle:Ressource', $id);

            if (!$jour) {
                $message = 'Aucun Ressource trouve';
            }
        }
        $form = $this->container->get('form.factory')->create(new RessourceForm(), $jour);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);

            if ($form->isValid()) {
                $form_user = $form->getData();
                $dateD = $form_user->getDateEmb();
                $dateF = $form_user->getDateSor();

                if ($dateD < $dateF) {
                    $em->persist($jour);
                    $em->flush();
                    $message = 'Ressource modifie avec succes !';
                } else {
                    $message = 'La date Embauche doit etre inferieure a la date de sortie';
                }
            }
        }
        return $this->container->get('templating')->renderResponse(
                        'GCNAFNAFBundle:Ressource:editerRessource.html.twig', array(
                    'form' => $form->createView(),
                    'message' => $message,
        ));
    }

//end func

    public function supprimerAction($id) {
        $em = $this->container->get('doctrine')->getEntityManager();
        $acteur = $em->find('GCNAFNAFBundle:Ressource', $id);
        if (!$acteur) {
            throw new NotFoundHttpException("Ressource non trouve");
        }
        $em->remove($acteur);
        $em->flush();
        return new RedirectResponse($this->container->get('router')->generate('GCNAFNAFBundle_salaries'));
    }

//recherche 		
    public function rechercherAction() {
        $message = '';
	  $message='Resultats de votre recherche';
        $user = new Ressource();
        $form = $this->container->get('form.factory')->create(new SearchRessourceForm(), $user);
        $request = $this->container->get('request');
        if ($request->getMethod() == 'POST') {
            $form->bind($request);
            if ($form->isValid()) {
                /*
                $em = $this->container->get('doctrine')->getEntityManager();
                $repository = $em->getRepository('GCNAFNAFBundle:Ressource');
                $form_user = $form->getData();
                $mon_user = $repository->findByNom($form_user->getNom());                 
                */
                $form_user = $form->getData();
                $monrech = $form_user->getNom();
                $monrech = "%" . $monrech . "%";
                 
                $em = $this->container->get('doctrine')->getEntityManager();
                $qb = $em->createQueryBuilder();
                $qb->select('r.id, r.cin, r.nom, r.prenom, r.login, r.pwd, r.dateEmb, r.dateSor, r.mail, p.nomProf')
                        ->from('GCNAFNAFBundle:Ressource', 'r')
                        ->from('GCNAFNAFBundle:Profil', 'p')
                        ->where('p.idProf = r.idProf')                        
                        ->Andwhere($qb->expr()->like('r.nom', ':nomrech'))
                        ->setParameter('nomrech', $monrech)
                        ->orderBy('r.nom', 'ASC');
                $query = $qb->getQuery();
                $mon_user = $query->getResult();

                if (!$mon_user)
                    return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Ressource:searchresource.html.twig', array('form' => $form->createView(), 'message' => 'Ce Nom est introuvable! verifier votre nom', 'mon_user' => ''
                                    ,));
                else {
                    return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Ressource:searchresource.html.twig', array('form' => $form->createView(), 'message' => 'Résultats de votre recherche', 'mon_user' => $mon_user
                                    ,));
                }//end else
            } //end if 	
        } //end if

        return $this->container->get('templating')->renderResponse('GCNAFNAFBundle:Ressource:searchresource.html.twig', array('form' => $form->createView(), 'message' => $message
                        ,));
    }

//end funct						
}

//end classe
