<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PFEController extends AbstractController
{
    #[Route('/p/f/e', name: 'app_p_f_e')]
    public function index(): Response
    {
        return $this->render('pfe/index.html.twig', [
            'controller_name' => 'PFEController',
        ]);
    }
}
