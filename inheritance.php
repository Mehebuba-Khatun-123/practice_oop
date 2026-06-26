<?php
class Iphone{
    public $brand;
    public function call(){
        echo "calling .\n";
    }
}
class SmartPhone extends Iphone{
    public function BrowseInternet(){
        echo "Browsing Internet.. \n";
    }
}
$phone =new SmartPhone ;
$phone->brand ="Realme";
$phone->call();
$phone->BrowseInternet(); 
?>