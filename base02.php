<?php
require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('View');
    $twig = new \Twig\Environment($loader,[
      //  'cache'=>'/path/to/compilation_cache',
    ]);
    $tab =["prems"=>[
        "janvier","fevrier","mars",
    ],
        "Deums"=>"coucou les amis"];

    echo $twig->render('base02View.html.twig',['name'=>'Michael','montab'=> $tab]);