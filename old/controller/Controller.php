<?php

namespace controller;
use Model;

require_once __DIR__ . "/../model/model.php";


class Controller
{
    public function index()
    {
        $model = new Model();
        $products = $model->list();
        include __DIR__ . "/../view/view.php";
    }

}

