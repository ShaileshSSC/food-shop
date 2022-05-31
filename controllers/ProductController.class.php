<?php

require '../model/Product.class.php';

class ProductController {

    public function all()
    {
       return Product::all();
    }
}
