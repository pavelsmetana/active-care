<?php
require __DIR__.'/../functions/connect.php';
class Model{
    public function list()
    {
        require __DIR__.'/../functions/connect.php';


        $sql = 'SELECT `name`, `img`, `description` FROM `products`';
        $result = mysqli_query($connect, $sql);
        $rows = mysqli_fetch_all($result);
        return $rows;
    }
}

//            class Model{
//    public function list(){
//        $dir    = __DIR__.'/../res/img/';
//        $array = scandir($dir);
//
//        return $array;
//    }
//}