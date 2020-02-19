<?php

// atvaizduoja visas PHP klaidas ekrane
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// nurodome jog bus pasiekiamos musu sukurtos klases
include_once 'Database.php';
include_once 'Model/Model.php';
include_once 'Controller/Controller.php';
include_once 'View/home.php';
include_once 'Model/Form.php';



$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);
$form = new Form();


$view->printUserData($model->getAllUsersData());
$userId = $model->getUserByID(13);
print '<br>';
$view->printOneUserData($userId);
print '<br>';
?>