<?php
    require __DIR__ . '/models/models.php';

    $items = News::getAll();

    include __DIR__ . '/views/index.php';
?>