<?php

require __DIR__ . '/../models/models.php';

class NewsController
{
    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/index.php';
    }
}