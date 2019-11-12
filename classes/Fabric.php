<?php

class Fabric{

    public function index(){
        $data = DB::query('SELECT * FROM fabric ORDER BY id DESC');
        return $data;
    }
    public function show($id){
        $data = DB::query('SELECT * FROM fabric WHERE id=:id', array(
            'id'=> $id
        ));
        return $data[0];

    }
}


?>