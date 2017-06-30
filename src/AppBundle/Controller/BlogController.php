<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Blog\Technology;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;


class BlogController extends Controller
{
	public function blogAction(EntityManagerInterface $em) {

		$tech = $em->getRepository('AppBundle:Blog\Technology')->findAll();

		if (!$tech) {
			echo '<script> alert("Technology not found");</script>';
		}

		return $this->render('default/blog.html.twig', [
			"technologies" => $tech
			]);
	}

	public function regAction() {

		return $this->render('default/registration.html.twig', array(
		));
	}
 
	public function regqAction(Request $request, EntityManagerInterface $em) {

		$tech = new Technology();

		$tech->setName($request->get('name'));
		$tech->setLang($request->get('lang'));
		$tech->setIcon($request->get('icon'));

		$em->persist($tech);
		$em->flush();

		return $this->render('default/registration.html.twig', array(
		));
	}

	public function rmtAction(Request $request, EntityManagerInterface $em) {
		$tech = $em->getRepository('AppBundle:Blog\Technology')->find($request->get('id'));
		$em->remove($tech);
		$em->flush();

		return $this->redirectToRoute('blog_action');
	}

}