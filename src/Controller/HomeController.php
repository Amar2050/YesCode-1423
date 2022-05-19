<?php

namespace App\Controller;

use stdClass;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    #[Route('/home', name: 'app_home')]
    public function index()
    {

        $truc = new stdClass();
        return $this->render('home/index.html.twig', [
            'world' => "World !",
        ]);
    }


}
