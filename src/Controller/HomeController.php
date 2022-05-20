<?php

namespace App\Controller;


use stdClass;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(){

        $author = "Loïs Snowden";
        $article = new stdClass();
        $article->title = "La théorie des fluides gastriques !";
        $article->intro = "Tout savoir sur le bidon...";
        $article->content = "Bla bla bla ect ect etc etc etc trop cool cool";

        return $this->render('home/index.html.twig', [
            "auteur" => $author,
            "article" => $article,
        ]);
    }
}
