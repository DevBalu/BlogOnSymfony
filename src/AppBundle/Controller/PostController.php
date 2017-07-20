<?php

namespace AppBundle\Controller;
use AppBundle\Entity\Blog\Post;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Common\Persistence\ManagerRegistry;


class PostController extends Controller
{
    /**
     * @Route("/addPost")
     */
    public function addPostAction()
    {
        return $this->render('AppBundle:Post:add_post.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/savePost")
     */
    public function savePostAction(Request $request, EntityManagerInterface $em)
    {

        $post = new Post();

        $images = [];
        foreach ($_FILES['images']["name"] as $name) {
            $images[] = $name;
        }

        $post->setTitle($request->get("title"));
        $post->setSubtitle($request->get("subtitle"));
        $post->setImages($images);
        $post->setContent($request->get("content"));
        $post->setComments($request->get("comments"));
        $post->setlikes($request->get("likes"));
        $post->setReposts($request->get("reposts"));
        date_default_timezone_set('Europe/Bucharest');
        $post->setDate(date('j M g:i'));

        $em->persist($post);
        $em->flush();

        return $this->render('AppBundle:Post:save_post.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/updatePost")
     */
    public function updatePostAction()
    {
        return $this->render('AppBundle:Post:update_post.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/deletePost")
     */
    public function deletePostAction(Request $request, EntityManagerInterface $em)
    {
        $post = $em->getRepository('AppBundle:Blog\Post')->find($request->get('id'));
        $em->remove($post);
        $em->flush();

        return $this->redirectToRoute('blog_action');
    }

}
