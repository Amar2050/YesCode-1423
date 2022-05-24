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
        
      
        // $banane = new Fruit();

        // $banane->setName("Tuplant des graines");
        // $banane->setPoids(752); // POO setter getter
        // $banane->setCalibre(8); // POO 

        // $laurent = new Fruit();

        // $laurent->setName("Michoulax");
        // $laurent->setPoids(104);
        // $laurent->setCalibre(50);
        // //------------

        // //------------------------
        // $manager->persist($laurent); // 
        // $manager->persist($banane); // 
        // //-------------------------

        // $manager->flush(); // excute ! ce qui est persist

        // dump($laurent->getName());

        $fruits = $repo->findAll();

        foreach ($fruits as $fruit) { 

            if($fruit->getId() > 5){
                $fruit->setCalibre(2050);
                $manager->persist($fruit);
            }
        }



 
        $manager->flush();

      
        
        return $this->render('home/index.html.twig', [ 
            "fruits" => $fruits
        ]);
    }


}
