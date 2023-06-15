<?php
// ProductController.php

namespace App\controllers;

use App\models\Book;
use App\models\DVD;
use App\models\Furniture;

class ProductController
{
    public static function getAllProducts()
    {
        $allDVD = DVD::getProducts();
        $allBook = Book::getProducts();
        $allFurniture = Furniture::getProducts();

        $allProducts = array_merge($allDVD, $allBook, $allFurniture);

        array_multisort(array_column($allProducts, 'SKU'), SORT_ASC, SORT_NATURAL | SORT_FLAG_CASE, $allProducts);

        return $allProducts;
    }
}
?>
