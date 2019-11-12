<?php

class Tag{
    public function index(){
        $data = DB::query('SELECT * FROM tag ORDER BY id DESC');
        return $data;
    }
    public function show($id){
        $data = DB::query('SELECT * FROM tag WHERE id=:id', array(
            'id'=> $id
        ));
        return $data[0];

    }
}


?>