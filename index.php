<?php
class User{
    public $name;
    public $roll;
    public $email;
    public function introduce(){
        echo "Hi, i am {$this->name}. My roll is {$this->roll} and my email is {$this->email}.";
    }
}
$user = new User();
$user->name ="Mehebuba";
$user->roll =10;
$user->email ="mehebuba@gmail.com";
$user->introduce();
?>
