<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        # php bin/console doctrine:fixtures:load --append
        for ($i = 0; $i < 5; ++$i) {
            $movie = new Movie();
            $movie->setTitle('MovieTron');
            $movie->setActors('John Doe, Jane Doe, Jase Doug, Jason Dougs');
            $movie->setDescription('New epic movie MovieTron about people having fun!!');
            $movie->setGenre('Horror');
            $movie->setDirector('Jaser Jason');
            $movie->setLength('1h 58m');
            $movie->setImagePath('assets/MovieTron-poster.jpg');
            $manager->persist($movie);
        }

        $manager->flush();
    }
}

