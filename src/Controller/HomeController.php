<?php

namespace App\Controller;


use App\Entity\Fruit;
use App\Repository\FruitRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class HomeController extends AbstractController
{

    #[Route('/', name: 'home_page')]
    public function index(EntityManagerInterface $manager, FruitRepository $repo){

        $banane = new Fruit();

        $banane->setName("Fin de journée");
        $banane->setPoids(18);
        
        $manager->persist($banane);
        $manager->flush();
        dump($banane);

        $fruits = $repo->findAll();

        dump($fruits);
        
        return $this->render('home/index.html.twig', [ 
            "fruits" => $fruits
        ]);
    }


}
