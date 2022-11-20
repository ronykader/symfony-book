<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ConferencerController extends AbstractController
{
    #[Route('/conferencer', name: 'app_conferencer')]
    public function index(): Response
    {
        return $this->render('conferencer/index.html.twig', [
            'controller_name' => 'ConferencerController',
        ]);
    }
}
