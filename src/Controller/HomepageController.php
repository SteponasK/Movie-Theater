<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Response;
class HomepageController extends AbstractController
{
    #[Route('/')]
    public function homepage(): Response
    {
        // Other logic
        return $this->render('main/homepage.html.twig');
    }


}

