<?php

require_once __DIR__ . '/../models/models.php';

class NewsControllers
{
    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/index.php';
    }
    public function actionOne($id)
    {
        $items = News::getOne($id);
        include __DIR__ . '/../views/index.php';
    }
}