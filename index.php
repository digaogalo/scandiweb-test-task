<?php
require_once('vendor/autoload.php');
include("App/controllers/ProductController.php");

$controller = new \App\Controllers\ProductController();
$results = $controller->getProductList();
$controller->renderProductList($results);
?>
