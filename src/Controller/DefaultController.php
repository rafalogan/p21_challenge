<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController {
    /**
     * @Route("/", name="Home")
     */
    public function index()
    {
        return $this->render('viewer/index.html.twig', [
            'controller_name' => 'DefaultController',
        ]);
    }
}
