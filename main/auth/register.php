<?php 
require_once('../../classes/DB.php');

if($_POST){
    if(empty(DB::query('SELECT * FROM users WHERE email=:email', array('email'=>$_POST['email']))[0]['email'])){

        DB::query('INSERT INTO `users`(`first_name`, `last_name`, `email`, `password`) VALUES (:first_name,:last_name,:email,:password)',array(
            ':first_name'=> $_POST['first_name'],
            ':last_name'=> $_POST['last_name'],
            ':email'=> $_POST['email'],
            'password'=> password_hash($_POST['password'], PASSWORD_DEFAULT)
        ));
            echo 'Registration was successful';
            return false;
    }else{
        echo 'Email already exist';
        return false;

    }
}



?>