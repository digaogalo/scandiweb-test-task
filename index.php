<?php
require_once('vendor/autoload.php');
include("resources/views/partials/head.php");
include("App/controllers/ProductController.php");

$controller = new \App\Controllers\ProductController();
$results = $controller->getProductList();

include("resources/views/template.php");
?>
