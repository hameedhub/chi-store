<?php


class Size{
    public function index()
    {
        $data = DB::query('SELECT * FROM size ORDER BY id DESC');
        return $data;
    }
    public function show($id){
        $data = DB::query('SELECT * FROM size WHERE id=:id', array(
            'id'=> $id
        ));
        return $data[0];

    }
}


?>