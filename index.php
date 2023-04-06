<?php


$assetsPath = dirname(__FILE__) . '/assets/**/*.{js}';
$files = glob($assetsPath, GLOB_BRACE);

$directory = dirname(__FILE__) . '/assets';
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

var_dump($files);die;
