<?php

namespace App\DataFixtures;

use App\Entity\PFE;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class PFEFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create();

        // $product = new Product();

        for ($i=0;$i<10;$i++){
            $PFE= new PFE() ;
            $PFE->setNom($faker->name) ;
            $PFE->setTitrePfe($faker->title) ;
         $PFE->setEntreprise() ;
            $manager->persist($PFE);
        }
        $manager->flush();
    }
}
