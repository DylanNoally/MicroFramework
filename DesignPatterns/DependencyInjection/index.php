<?php

include 'ContainerInterface.php';
include 'Container.php';

$container = new Container();

$pdo = new PDO('mysql:host=localhost;dbname=micro_framework;charset=utf8', 'root', '');

$container->add('database', $pdo);

/*var_dump($container);*/
