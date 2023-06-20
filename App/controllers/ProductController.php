<?php
use App\models\Book;
use App\models\DVD;
use App\models\Furniture;

$controller = new ProductController();
$results = $controller->getProductList();

class ProductController {
    public function getProductList() {
        $allDVD = DVD::getProducts();
        $allBook = Book::getProducts();
        $allFurniture = Furniture::getProducts();
        $allProducts = array_merge($allDVD, $allBook, $allFurniture);
        array_multisort(array_column($allProducts, 'SKU'), SORT_ASC, SORT_NATURAL | SORT_FLAG_CASE, $allProducts);

        $results = "";
        foreach ($allProducts as $row) {
            $results .= '<div class="card hover-overlay hover-zoom hover-shadow ripple">
                <input type="checkbox" onchange="check_active()" class="delete-checkbox" name="delete[]" value=' . $row->getSlug("SKU") . '&' . $row->productType . ' id="delete-checkbox">
                <a href="resources/views/edit-product?SKU=' . $row->getSlug("SKU") . '&type=' . $row->productType . '"></a>
                <span>' . $row->SKU . '</span>
                <span>' . $row->Name . '</span>
                <span>' . $row->Price . ' $</span>
                <span>' . $row->attributeString() . '</span>
            </div>';
        }
        
        return $results;
    }
}
