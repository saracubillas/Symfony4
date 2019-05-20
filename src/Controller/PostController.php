<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PostController
{
    /**
     * @Route()
     */
    public function home()
    {
        return new Response('Hello tech yogi friends!!');
    }

}