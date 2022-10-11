
<?php
session_start();
include_once __DIR__."/header.php";

include __DIR__."/products.php";

require __DIR__."/controller/Controller.php";
$controller = new Controller();
$controller -> index();

include_once __DIR__."/footer.php";
