<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{

	public function introAction(Request $request)
	{
		// replace this example code with whatever you need
		return $this->render('default/intro.html.twig', [
	// 		'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
		]);
	}

	/*example*/
	// public function blogParamsAction(Request $request)
	// {
	// 	return $this->render('default/blog.html.twig', [
	// 		"title" => [$request->get('id'), $request->get('name')],
	// 		"title2" => "New Title 2",
	// 		"posts" => ["sdfsd", "sadfsdf", "sdfsdf", "sjdfhsldf"]
	// 	]);
	// }
}
