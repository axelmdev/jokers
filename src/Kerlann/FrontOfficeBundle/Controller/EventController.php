<?php
namespace Kerlann\FrontOfficeBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Kerlann\FrontOfficeBundle\Entity\Event;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\BrowserKit\Response;
class EventController extends Controller {
	/**
	 * @Route("/")
	 * @Method("GET")
	 */
	public function indexAction() {
		$repository = $this->getDoctrine()->getRepository('KerlannFrontOfficeBundle:Event');
		$events = $repository->findAll();
		return $this->
		render('KerlannFrontOfficeBundle:Kerlann:index.html.twig', [
				'events' => $events
		]);
	}

	/**
	 * @Route("/radio")
	 */
	public function radioAction() {
		return $this->
			render('KerlannFrontOfficeBundle:Kerlann:radio.html.twig');
	}

	/**
	 * @Route("/livraison")
	 */
	public function livraisonAction() {
		return $this->
		render('KerlannFrontOfficeBundle:Kerlann:livraison.html.twig');
	}

	/**
	 * @route("/crocpanier")
	 */
	public function panierAction() {
		return $this->
		render('KerlannFrontOfficeBundle:Kerlann:panier.html.twig');
	}
}