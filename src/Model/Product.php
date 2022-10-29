<?php

namespace App\Model;

use App\DB\DBModel;

class Product extends DBModel
{
    public function productList()
    {
        return $this->query("SELECT * FROM products");
    }
}