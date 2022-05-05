<?php

namespace App\Controller;

use App\Entity\PFE;
use App\Form\PersonneType;
use App\Form\PFEformType;
use App\Form\PFEType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AjoutController extends AbstractController
{
    #[Route('/ajout', name: 'app_ajout')]
    public function index(ManagerRegistry $doctrine,\Symfony\Component\HttpFoundation\Request $request): Response
    {   $PFE=new PFE() ;
        $form=$this->createForm(PFEformType::class,$PFE) ;
        $form->handleRequest($request) ;
        if($form->isSubmitted()) {
            $EntityManager=$doctrine->getManager() ;
            $EntityManager->persist($PFE);
            $EntityManager->flush();
            $this->addFlash('success',"Inscription réussi");
        }

            return $this->render('ajout/index.html.twig', [
                'controller_name' => 'PersonneController',
                'formulaire'=>$form->createView(),

            ]);
        }
}



