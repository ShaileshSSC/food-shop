<?php

class Product extends DB
{
    public static function all()
    {
        $sql = "SELECT * from products";
        $stmt = DB::connect()->prepare($sql);
        $stmt->execute();

        $data = $stmt->fetchAll(PDO::FETCH_OBJ);

        return $data;
    }

}