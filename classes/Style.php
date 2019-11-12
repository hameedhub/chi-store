<?php


class Style{
    public function index()
    {
        $data = DB::query('SELECT * FROM style ORDER BY id DESC');
        return $data;
    }
    public function show($id){
        $data = DB::query('SELECT * FROM style WHERE id=:id', array(
            'id'=> $id
        ));
        return $data[0];

    }
}


?>