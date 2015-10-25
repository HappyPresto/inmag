<?php
    //require_once __DIR__ . '/controllers/newscontrollers.php';
    require_once __DIR__ . '/autoload.php';
    //$id=0;
    $ctrl = new NewsControllers();
    $ctrl->actionAll();

?>