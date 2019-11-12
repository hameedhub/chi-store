<?php 
require_once('../../classes/DB.php');

DB::query('DELETE FROM tag WHERE id =:id', array(
    'id'=>$_GET['id']
));

header('Location: tag.php');

?>