<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PostController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function home()
    {
        return $this->render('posts/home.html.twig');
    }

    /**
     * @Route("/blog/{post}", name="post_show")
     */
    public function showPost($post)
    {
        return $this->render('posts/post.html.twig', [
            'title' => ucwords(str_replace('-', ' ', $post))
        ]);
    }

}