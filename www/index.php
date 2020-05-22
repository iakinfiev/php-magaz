<?php
$controllerName  = isset($_GET['controller'])? ucfirst($_GET['controller']):'Index';
$actionName  = isset($_GET['action'])? $_GET['action'] : 'index';
echo 'подключенный файл controller = '. $controllerName .'</br>';
echo 'подключенный файл action = '. $actionName .'</br>';