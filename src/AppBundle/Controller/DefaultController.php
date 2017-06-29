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
		return $this->render('default/intro.html.twig', []);
	}
}
