<?php 
namespace src;
namespace IbyteNovaCom\App;
use IbyteNovaCom\App\SingletonTrait;
class  ProductManager
{
    use SingletonTrait;

    public  function getProductName(){

        echo "productname";
    }
}
