<?php
namespace AppBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Event;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\BrowserKit\Response;

class EventController extends Controller {

	/**
	 * @Route("/", name="app_jokers_index")
	 * @Method("GET")
	 */
	public function indexAction() {
		$repository = $this->getDoctrine()->getRepository('AppBundle:Event');

		$events = $repository->findAll();

		return $this->
		render('AppBundle:Kerlann:index.html.twig', [
				'events' => $events
		]);
	}
}