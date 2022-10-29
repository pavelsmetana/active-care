<?php

namespace App\Controller;

use App\Model\Product;

class ProductController extends Controller
{
    public function list()
    {
        $product = new Product();

        echo $this->render("product/list", ["products" => $product->productList()]);
    }
}