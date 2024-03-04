<?php 
include __DIR__ . '/vendor/autoload.php';
use IbyteNovaCom\App\ProductManager;
$product = ProductManager::getInstance()->getProductName();
echo $product;