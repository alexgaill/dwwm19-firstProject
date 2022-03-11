<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

final class TestController extends AbstractController
{
    public function hello(): Response
    {
        return new Response("Hello World!");
    }
    
    #[Route(path: ["/bye", "/byebye"], name: "bye", methods: "GET")]
    public function bye(): Response
    {
        return new Response("Au revoir!");
    }

    #[Route(path:"/", name: "accueil")]
    public function accueil (): Response
    {
        $users = [
            [
                "nom" => "Doe",
                "prenom" => "John"
            ],
            [
                "nom" => "Doe",
                "prenom" => "Jane"
            ],
        ];

        return $this->render("accueil.html.twig", [
            "nomVariable" => "valeurVariable",
            "listUser" => $users
        ]);
    }
}
