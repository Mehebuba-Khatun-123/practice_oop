<?php
class Demo{
    public $publicVar = "public";
    protected $protectedVar ="protected";
    private $privateVar ="privateted";
    public function showAll(){
        echo $this->publicVar . "\n";
        echo $this->protectedVar. "\n";
        echo $this->privateVar . "\n";
    }
}
class ChildDemo extends Demo{
    public function showFromChild(){
        echo $this->publicVar . "\n";
        echo $this->protectedVar . "\n";
    }
}
$child = new ChildDemo;
$child->showFromChild();
?>