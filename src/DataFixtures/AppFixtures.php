<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\Article;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i=0; $i < 10 ; $i++) { 

            $article = new Article();
            $article->setTitle("Article n°". $i);
            $article->setIntro('Ceci est une super intro');
            $article->setContent('<p>Bla bla</p><p>Lorem 10</p><p>Ceci est un contenu</p>');
            $article->setImage("https://ecolesanahilwa.dz/wp-content/uploads/2020/08/blog-1.jpg");
            $article->setCreatedAt(new DateTime());
         
            $manager->persist($article);
        }

        $manager->flush();
    }
}
