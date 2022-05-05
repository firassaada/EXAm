<?php

namespace App\DataFixtures;

use App\Entity\PFE;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class Entreprise extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $faker = Factory::create();
        // $product = new Product();

        for ($i=0;$i<10;$i++){
            $Entreprise= new \App\Entity\Entreprise() ;
            $Entreprise->setNom($faker->name) ;
//            $PFE->setEntreprise($faker->company) ;
            $manager->persist($Entreprise);
        }
        $manager->flush();
    }
}
