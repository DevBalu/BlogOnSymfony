<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;
use AppBundle\Entity\aboutEntity;

class aboutController extends Controller
{
    /**
     * @Route("/insertInfo")
     */
    public function insertInfoAction()
    {


        return $this->render('AppBundle:about:insert_info.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/saveAboutInfo")
     */

    public function saveAboutInfo(Request $request, EntityManagerInterface $em){
        $about = new aboutEntity();
        $about->setImg($request->get('img'));
        $about->setNickname($request->get('nickname'));
        $about->setGlobInfo($request->get('globInfo'));
        $about->setContactInfo($request->get('contactInfo'));
        $em->persist($about);
        $em->flush();

        return $this->render('AppBundle:about:insert_info.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/updateInfo")
     */
    public function updateInfoAction()
    {
        return $this->render('AppBundle:about:update_info.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/about")
     */
    public function aboutAction(Request $request, EntityManagerInterface $em)
    {
        $about = $this->getDoctrine()->getRepository(aboutEntity::class)->findBy([], ['id' => 'DESC']);
        return $this->render('AppBundle:about:about.html.twig', array(
            'about' => $about
        ));
    }

}
