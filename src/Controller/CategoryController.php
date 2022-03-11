<?php

namespace App\Controller;

use App\Entity\Category;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategoryController extends AbstractController
{
    #[Route('/category', name: 'app_category')]
    public function index(ManagerRegistry $registry): Response
    {
        $categories = $registry->getRepository(Category::class)->findAll();
        // dump($categories);
        return $this->render('category/index.html.twig', [
            "categoryList" => $categories
        ]);
    }
}
