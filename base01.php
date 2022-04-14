<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\ArrayLoader([
'index' => 'Hello {{ name }}!',
'suite' => '<br/> comment vas-tu ?',
]);
$twig = new \Twig\Environment($loader);

echo $twig->render('index', ['name' => 'Fabien']);
echo $twig->render('suite',[]);
