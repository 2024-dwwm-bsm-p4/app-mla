<?php

namespace App\Tests\Entity;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

class ProductTest extends TestCase
{
    public function testGettersAndSetters(): void
    {
        // Création d'une instance de l'entité Product
        $product = new Product();

        // Test du setter et getter pour le nom
        $product->setName('Produit Test');
        $this->assertEquals('Produit Test', $product->getName());

        // Test du setter et getter pour la catégorie
        $product->setCategory('Catégorie Test');
        $this->assertEquals('Catégorie Test', $product->getCategory());

        // Test du setter et getter pour la description
        $product->setDescription('Description Test');
        $this->assertEquals('Description Test', $product->getDescription());

        // Test du setter et getter pour l'image (le chemin est supposé ici)
        $product->setImage('image_test.jpg');
        $this->assertEquals('image_test.jpg', $product->getImage());
    }
}
