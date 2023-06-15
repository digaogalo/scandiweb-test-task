<?php
require_once('vendor/autoload.php');
include("resources/views/partials/head.php");

use App\controllers\ProductController;

$allProducts = ProductController::getAllProducts();
?>
<html>
<body>
    <div class="container">
        <div class="title">
            <h2>Product List</h2>
            <div>
              <button   
                type="button"   
                class="btn btn-success btn-size"    
                onclick="window.location.href='resources/views/add-product.php'">   
                ADD 
              </button>

                <button     
                   type="submit"    
                   class="btn btn-danger btn-size"  
                   value="delete"   
                   name="but_delete"    
                   id="delete-product-btn"  
                   disabled>    
                   MASS DELETE  
                </button>
                
            </div>
        </div>
        <hr>
        <form method="post" action="resources/views/delete">
            <div class="row isotope-grid main-grid">
                <?php foreach ($allProducts as $row): ?>
                    <div class="card hover-overlay hover-zoom hover-shadow ripple">
                        <input type="checkbox"  
                        onchange="check_active()"   
                        class="delete-checkbox"     
                        name="delete[]"     
                        value="<?= $row->getSlug("SKU") ?>&<?= $row->productType ?>"    
                        id="delete-checkbox">

                        <a href="resources/views/edit-product?SKU=<?= $row->getSlug("SKU") ?>&type=<?= $row->productType ?>"></a>
                        <span><?= $row->SKU ?></span>
                        <span><?= $row->Name ?></span>
                        <span><?= $row->Price ?> $</span>
                        <span><?= $row->attributeString() ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </form>
    </div>
    <?php include("resources/views/partials/footer.php"); ?>
</body>
</html>
