<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class EncuentraController extends AbstractController
{
    #[Route('/location', name: 'app_encuentra')]
    public function index(): Response
    {
        return $this->render('encuentra/index.html.twig', [
            'controller_name' => 'EncuentraController',
        ]);
    }
}
