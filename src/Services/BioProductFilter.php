<?php

namespace App\Services;

use App\Entity\Product;

class BioProductFilter
{
    /**
     * Retourne uniquement les produits marqués comme bio.
     *
     * @param Product[] $products
     * @return Product[]
     */
    public function filter(array $products): array
    {
        // Filtre les produits où `getIsBio()` retourne true
        return array_filter($products, fn(Product $p) => $p->getIsBio() === true);
    }
}