<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Blog\Technology;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;

class DefaultController extends Controller
{

	public function introAction(Request $request, EntityManagerInterface $em)
	{

		$tech = new Technology();
		$tech->setName("Symfony");
		$tech->setLang("php");
		$tech->setIcon("https://cdn.dribbble.com/users/1061842/screenshots/2942741/ironman.png");
		$em->persist($tech);
		$em->flush();


		return $this->render('default/intro.html.twig', ["resp" => 'Saved new product with id '.$tech->getId()]);
	}
}
