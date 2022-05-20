<?php

namespace App\Controller;


use stdClass;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(){


        $user = new stdClass();
        $user->isConnected = true;
        $user->age = 28;
        $author = "Loïs Snowden";
        $article = new stdClass();
        $article->title = "La théorie des fluides gastriques !";
        $article->intro = "Tout savoir sur le bidon...";
        $article->content = "Bla bla bla ect ect etc etc etc trop cool cool";

        $games = ['BF 2042', 'COD 49', 'FIFA 2034', 'NFL 2077', 'NBA Mutations'];

        return $this->render('home/index.html.twig', [
            "auteur" => $author,
            "article" => $article,
            "user"    => $user,
            "jeux"    => $games
        ]);
    }
}
