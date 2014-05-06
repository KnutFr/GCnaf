<?php

namespace GCNAF\NAFBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use GCNAF\NAFBundle\Entity\JoursFeries;
use GCNAF\NAFBundle\Entity\ListeJours;
  
class FeriesController extends Controller
{  
	// 1 modifier fct
	 public function editerAction($id)
	{	
		$message='';
		$civilites=array();
		$em = $this->container->get('doctrine')->getEntityManager();
		$query=$this->getDoctrine()->getRepository('GCNAFNAFBundle:ListeJours')->findAll();
		foreach ($query as $ref) {
		$civilites[$ref->getId()]=$ref->getLibelle();
		}		    
		$jour = $em->find('GCNAFNAFBundle:JoursFeries', $id);   
	    if (!$jour)	{ $message='Aucun jour ferie trouve'; }		
		$formBuilder = $this->createFormBuilder($jour);
		$formBuilder			
			->add('idProjet', 'choice', array('choices' => $civilites, 'label' => 'La Liste des Jours'))
			->add('date','date', array('label' =>'Choisissez une date','format' => 'yyyy-MM-dd','years' => range(2014 ,2030) )) ;			
		$form = $formBuilder->getForm();		
		$request = $this->container->get('request');
  	   if ($request->getMethod() == 'POST') 
	  {
    	$form->bind($request);
		if ($form->isValid()) 
		{
		$em->persist($jour);
		$em->flush();
		return new RedirectResponse($this->container->get('router')->generate('GCNAFNAFBundle_jours'));		
 		}
	   }
		return $this->container->get('templating')->renderResponse(
	   'GCNAFNAFBundle:JoursFeries:editer.html.twig',
		array(
		'form' => $form->createView(),
		'message' => $message,
		));	
	}// fin modification
	
	//2 fct ajouter jour
	public function ajouterAction()
    {
		$civilites=array();
		$em = $this->container->get('doctrine')->getEntityManager();
		$query=$this->getDoctrine()->getRepository('GCNAFNAFBundle:ListeJours')->findAll();
		foreach ($query as $ref) {
		$civilites[$ref->getId()]=$ref->getLibelle();
		}		    
  	    $jour = new JoursFeries();	
		$formBuilder = $this->createFormBuilder($jour);
		$formBuilder			
		->add('idProjet', 'choice', array('choices' => $civilites,'empty_value' => 'Choisissez un jour', 'label' => 'La Liste des Jours'))
		->add('date','date', array('label' =>'Choisissez une date','format' => 'yyyy-MM-dd','years' => range(2014 ,2030) )) ;			
		
		$form = $formBuilder->getForm();		
		$request = $this->container->get('request');
  	   if ($request->getMethod() == 'POST') 
	  {
    	$form->bind($request);
		if ($form->isValid()) 
		{
		$em->persist($jour);
		$em->flush();
		return new RedirectResponse($this->container->get('router')->generate('GCNAFNAFBundle_jours'));		
 		}
	   }
		return $this->container->get('templating')->renderResponse(
	   'GCNAFNAFBundle:JoursFeries:ajoutjourfer.html.twig',
		array(
		'form' => $form->createView(),
		));	
	}// fin l'jout   	  	
  	
}//end classe
