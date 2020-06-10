<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/search", name="search_property")
     */
    public function index()
    {
        return $this->render('search/index.html.twig', [
            'search' => 'searchBarController',
        ]);
    }
}
