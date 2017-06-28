<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Blog\Technology;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

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
}