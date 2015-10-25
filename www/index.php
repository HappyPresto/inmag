<?php
    require __DIR__ . '/controllers/newscontrollers.php';

    $ctrl = new NewsController();
    $ctrl->actionAll();

?>