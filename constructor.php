<?php
class User{
    public $name;
    public function __construct($name){
        $this->name =$name;
        echo "user {$this->name} created! \n";
    }
}
$user = new user("mehebuba");
?>