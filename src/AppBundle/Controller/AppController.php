<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $posts = $this->getDoctrine()->getRepository('AppBundle:Post')->findAll();

        return $this->render('default/index.html.twig', array(
            'posts' => $posts
        ));
    }
}
