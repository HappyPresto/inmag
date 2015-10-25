<?php

function __autoload($class_name)
{
    var_dump($class_name);
    if (file_exists(__DIR__ . '/controllers/' . $class_name . '.php')) {
        require __DIR__ . '/controllers/' . $class_name . '.php';
    }
}