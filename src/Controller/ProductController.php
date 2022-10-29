<?php

namespace App\Controller;

class ProductController extends Controller
{
    public function list()
    {
        echo $this->render("product/list", ["products" => [
            "pr1", "pr2"
        ]]);
    }
}