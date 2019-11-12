<?php 
require_once('../../classes/DB.php');

DB::query('DELETE FROM products WHERE id =:id', array(
    'id'=>$_GET['id']
));

header('Location: addproduct.php');

?>