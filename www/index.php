<?php
    require_once __DIR__ . '/controllers/newscontrollers.php';

    $ctrl = new NewsController();
    $ctrl->actionAll();

?>