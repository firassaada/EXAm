<?php

namespace App\Controller;

use App\Entity\Entreprise;
use App\Entity\Personne;
use App\Entity\PFE;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AfficheController extends AbstractController
{
    #[Route('/affiche', name: 'app_affiche')]
    public function select(ManagerRegistry $doctrine) : Response {
        $repository=$doctrine->getRepository(Entreprise::class) ;
        $repos=$doctrine->getRepository(PFE::class) ;
        $entreprise=$repository->findAll() ;

        $stat=$repos->pfenbr() ;

        return $this->render('affiche.html.twig',['entreprise'=>$entreprise]) ;
    }
}

