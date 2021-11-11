<?php

namespace App\Controller;

use App\Service\GetPeopleDetails;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(GetPeopleDetails $getPeopleDetails, Request $request): Response
    {
        $numero = $request->query->get('numero');
        $peopleDetails = $getPeopleDetails->getPeople($numero);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'people' => $peopleDetails,
        ]);
    }
}
