<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // Fruits
        $product1 = new Product();
        $product1->setName('Pomme');
        $product1->setCategory('Fruits');
        $product1->setDescription('Une pomme fraîche et croquante issue de l’agriculture biologique.');
        $product1->setImage('pomme.jpg');
        $manager->persist($product1);
    
        $product2 = new Product();
        $product2->setName('Banane');
        $product2->setCategory('Fruits');
        $product2->setDescription('Des bananes mûres et sucrées, parfaites pour vos desserts.');
        $product2->setImage('banane.jpg');
        $manager->persist($product2);
    
        $product3 = new Product();
        $product3->setName('Orange');
        $product3->setCategory('Fruits');
        $product3->setDescription('Des oranges juteuses, riches en vitamine C.');
        $product3->setImage('orange.jpg');
        $manager->persist($product3);
    
        // Légumes
        $product4 = new Product();
        $product4->setName('Carotte');
        $product4->setCategory('Légumes');
        $product4->setDescription('Des carottes bio au goût sucré et délicieux.');
        $product4->setImage('carotte.jpg');
        $manager->persist($product4);
    
        $product5 = new Product();
        $product5->setName('Brocoli');
        $product5->setCategory('Légumes');
        $product5->setDescription('Un brocoli frais et croquant, riche en nutriments.');
        $product5->setImage('brocoli.jpg');
        $manager->persist($product5);
    
        $product6 = new Product();
        $product6->setName('Tomate');
        $product6->setCategory('Légumes');
        $product6->setDescription('Des tomates rouges et juteuses, idéales pour les salades.');
        $product6->setImage('tomate.png');
        $manager->persist($product6);
    
        // Produits laitiers
        $product7 = new Product();
        $product7->setName('Lait');
        $product7->setCategory('Produits laitiers');
        $product7->setDescription('Lait entier pasteurisé, parfait pour vos recettes ou à boire.');
        $product7->setImage('lait.jpg');
        $manager->persist($product7);
    
        $product8 = new Product();
        $product8->setName('Fromage Brie');
        $product8->setCategory('Produits laitiers');
        $product8->setDescription('Un fromage Brie crémeux et savoureux.');
        $product8->setImage('fromage_brie.jpg');
        $manager->persist($product8);
    
        $product9 = new Product();
        $product9->setName('Yaourt nature');
        $product9->setCategory('Produits laitiers');
        $product9->setDescription('Un yaourt nature onctueux et sain.');
        $product9->setImage('yaourt.jpeg');
        $manager->persist($product9);
    
        // Viande
        $product10 = new Product();
        $product10->setName('Poulet');
        $product10->setCategory('Viande');
        $product10->setDescription('Filet de poulet fermier, tendre et savoureux.');
        $product10->setImage('poulet.jpg');
        $manager->persist($product10);
    
        $product11 = new Product();
        $product11->setName('Bœuf haché');
        $product11->setCategory('Viande');
        $product11->setDescription('Bœuf haché 100% pur, idéal pour vos burgers.');
        $product11->setImage('boeuf_hache.jpg');
        $manager->persist($product11);
    
        $product12 = new Product();
        $product12->setName('Jambon');
        $product12->setCategory('Viande');
        $product12->setDescription('Tranches de jambon de qualité supérieure.');
        $product12->setImage('jambon.jpg');
        $manager->persist($product12);
    
        // Autres produits
        $product13 = new Product();
        $product13->setName('Œufs');
        $product13->setCategory('Autres');
        $product13->setDescription('Œufs frais de poules élevées en plein air.');
        $product13->setImage('oeufs.jpg');
        $manager->persist($product13);
    
        $product14 = new Product();
        $product14->setName('Beurre');
        $product14->setCategory('Produits laitiers');
        $product14->setDescription('Beurre doux de qualité supérieure.');
        $product14->setImage('beurre.jpg');
        $manager->persist($product14);
    
        $product15 = new Product();
        $product15->setName('Poisson');
        $product15->setCategory('Autres');
        $product15->setDescription('Filet de poisson frais, parfait pour vos repas santé.');
        $product15->setImage('poisson.jpg');
        $manager->persist($product15);
    
        // Ajoutez d'autres produits similaires ici...
    
        // Persistance des données
        $manager->flush();
    }
    }
