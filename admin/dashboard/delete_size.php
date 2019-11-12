<?php 
require_once('../../classes/DB.php');

DB::query('DELETE FROM size WHERE id =:id', array(
    'id'=>$_GET['id']
));

header('Location: size.php');

?>