<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SelectController extends AbstractController
{
    #[Route('/select', name: 'app_select')]
    public function index(): Response
    {
        return $this->render('select/index.html.twig', [
            'controller_name' => 'SelectController',
        ]);
    }
}
