<?php

namespace App\Controller;

class DefaultController extends Controller
{
    public function index()
    {
        echo $this->render("main", ["name" => "Hello, Pavel"]);
    }
}