<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\HeuresConduites;
use App\UserController;


class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $heuresConduites = new HeuresConduites();
        $heuresConduites->setIdEléve(1);
        $heuresConduites->setIdMonuteur(1);
        $heuresConduites->setDate(new \DateTime('2023-03-03 08:09:37'));
        $heuresConduites->setPrix(35);
        $heuresConduites->setNumberHeureTotal(35);
        $heuresConduites->setRésaHeureConduite(new \DateTime('2023-03-03 08:09:37'));
        $manager->persist($heuresConduites);
        $manager->flush();
        //$manager->getConnection()->exec('INSERT INTO heures_resa (id, id_eléve, id_monuteur, date, résa_heure_conduite, prix, number_heure_total) VALUES (1, 1, 1, \'2023-03-03 08:09:37\', \'2023-03-03 08:09:37\', 50, 1)');
    }
}
