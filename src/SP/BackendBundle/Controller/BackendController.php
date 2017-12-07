<?php

namespace SP\BackendBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use SP\BackendBundle\Entity\Donnee;

class BackendController extends Controller
{
    public function indexAction(Request $request)
    {
    	
    	$defaultData = array('message' => "Activation de l'enregistrement");
    	$form = $this->createFormBuilder($defaultData)
    	->add('marche', SubmitType::class, array(
    			'attr' => array('label' => 'marche'),
    	))
    	->add('arret', SubmitType::class, array(
    			'attr' => array('label' => 'arret'),
    	))
    	->getForm();
    	
    	$form->handleRequest($request);
    	
    	if ($form->isSubmitted() && $form->isValid()) {
    		/* Declenche la function d'eneregistrement des données */
    		if ($form->get('marche')->isClicked()) {
    			echo "marche";
    			// functionEnregistrement()->run();
    			
    		}
    		/* Arrete la function d'enregistrement des données */
    		if ($form->get('arret')->isClicked()) {
    			echo "arret";
    			// functionEnregistrement()->stop();
    		}
    		
    	}
    	
        return $this->render('SPBackendBundle:Backend:index.html.twig', array(
        		'form' => $form->createView()
        ));
    }
}
