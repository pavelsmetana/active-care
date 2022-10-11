<?php
$connect = mysqli_connect('localhost', 'root', '', 'active');
    if(!$connect){
        die('Error: No Database Connection');
    }
