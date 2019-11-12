<?php 
require_once('../../classes/DB.php');

DB::query('DELETE FROM fabric WHERE id =:id', array(
    'id'=>$_GET['id']
));

header('Location: fabric.php');

?>