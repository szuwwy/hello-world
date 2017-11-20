<?php
require_once "vendor/autoload.php";

$hello = new Szuwwy\Demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Szuwwy\Demo\Hello('My Goddess');
echo $hiGirl->hello();