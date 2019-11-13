  
<?php
require '../../classes/DB.php';
require '../../classes/Session.php';
if ($_POST) {
    $value = DB::query('SELECT * FROM users WHERE email =:email', array(':email'=>$_POST['email']));
    if (password_verify($_POST['password'], $value[0]['password'])) {
            Session::init();
            Session::set('isLoggedIn', true);
            Session::set('user', $value[0]);
            
           return false;
    }else{
        echo 'Wrong Email Address or Password';
        return false;
    }
    
}
?>