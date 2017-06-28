<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class BlogController extends Controller
{
	public function blogAction() {
		return $this->render('default/blog.html.twig', [
			"title" => ["2342", "3453"],
			"title2" => "New Title 2",
			"posts" => ["sdfsd", "sadfsdf", "sdfsdf", "sjdfhsldf"]
		]);
	}
}