<?php 
require_once('../../classes/DB.php');

DB::query('DELETE FROM style WHERE id =:id', array(
    'id'=>$_GET['id']
));

header('Location: style.php');

?>