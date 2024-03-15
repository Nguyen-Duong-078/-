<?php

define('PATH_ROOT', __DIR__);

if (!function_exists('debug')) {
    function debug($data)
    {
        echo "<pre>";
        print_r($data);
        die;
    }
}

if (!function_exists('Error_404')) {
    function Error_404()
    {
        require_once 'C:\laragon\www\Ethereal\src\Views\Error\Errors.php';
        die;
    }
}