<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class QuienesController extends AbstractController
{
    #[Route('/about', name: 'app_quienes')]
    public function index(): Response
    {
        return $this->render('quienes/index.html.twig', [
            'controller_name' => 'QuienesController',
        ]);
    }
}
