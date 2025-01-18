<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product1 = new Product();
        $product1->setName('Pomme');
        $product1->setCategory('Fruits');
        $product1->setDescription('Une pomme fraîche et croquante issue de l’agriculture biologique.');
        $product1->setType('Alimentaire');
        $product1->setImage('public/uploads/images/67866d5fc1e39.jpg'); // Nom du fichier de l'image dans le dossier public/uploads
        $manager->persist($product1);

        $product2 = new Product();
        $product2->setName('Carotte');
        $product2->setCategory('Légumes');
        $product2->setDescription('Des carottes bio au goût sucré et délicieux.');
        $product2->setType('Alimentaire');
        $product2->setImage('public/uploads/images/carotte.jpg'); // Nom du fichier de l'image
        $manager->persist($product2);

        $manager->flush();
    }
}
