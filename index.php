<?php
session_start();

require_once './vendor/autoload.php';

(new \Symfony\Component\Dotenv\Dotenv)->load(__DIR__ . '/.env');

require_once './helper/helper.php';
require_once './PHPExcel/Classes/PHPExcel.php';
require_once './routers/routers.php';