<?php

namespace App\Controller;


use App\Repository\MovieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
class HomepageController extends AbstractController
{
    #[Route('/')]
    public function homepage(MovieRepository $movieRepository): Response
    {
        $movies = $movieRepository->findAll();
        // Other logic
        return $this->render('main/homepage.html.twig',[
            'movies' => $movies,
            ]);
    }


}

