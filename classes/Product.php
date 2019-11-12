<?php

class Product{

    public function index(){
        $data = DB::query('SELECT * FROM products ORDER BY id DESC');
        return $data;
    }
    public function show($id){
        $data = DB::query('SELECT * FROM products WHERE id=:id', array(
            'id'=> $id
        ));
        return $data[0];

    }
    
}


?>