<?php

namespace App\Controller;


use stdClass;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    #[Route('/', name: 'app_home')]
    public function index(){
        return $this->render('home/index.html.twig', []);
    }
    #[Route('/article-list', name: 'articles')]
    public function articles(){
        return $this->render('home/articles.html.twig', []);
    }


}
