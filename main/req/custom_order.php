<?php 
require '../../classes/DB.php';

if($_POST){
    DB::query('INSERT INTO `custom_order`(`user_id`, `style_id`, `fabric_id`, `size_id`, `tag_id`, `qty`, `status`)
     VALUES (:user_id,:style_id,:fabric_id,:size_id,:tag_id,:qty,:status)',
     array(':user_id'=> $_POST['user_id'],
            ':style_id'=> $_POST['style_id'],
            ':fabric_id'=> $_POST['fabric_id'],
            ':size_id'=> $_POST['size_id'],
            ':tag_id'=> $_POST['tag_id'],
            ':qty'=> $_POST['qty'],
            ':status'=> 'pending'
    ));
    echo 'Custom order was successfully placed!';
}


?>