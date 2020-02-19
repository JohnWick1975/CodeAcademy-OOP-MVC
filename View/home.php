<?php
include_once '../config.php';
include_once '../Database.php';
include_once '../Model/Table.php';
include_once '../Model/Model.php';
include_once '../Model/Form.php';
include_once '../Model/Menu.php';
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?= CONFIG['site_title']; ?></title>
		<link rel="shortcut icon" href="/<?= CONFIG['site_path']; ?>/assets/favicon.bmp" type="image/x-icon">
		<link rel="icon" href="/<?= CONFIG['site_path']; ?>/assets/favicon.bmp" type="image/x-icon">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/font-awesome.min.css">
		<link rel="stylesheet" href="/<?= CONFIG['site_path']; ?>/assets/css/style.css">
        <style>
            body {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            div {
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            nav {
                text-align: center;
            }
            .menu-link {
                font-weight: bold;
                text-decoration: none;
                background: silver;
                color: red;
                border: 3px solid #000;
                padding: 5px;
                margin: 0 10px;
            }
        </style>
    </head>
    <body>
        <h1>Home Page</h1>
        <div>
            <?php
            $model = new Model();
            print '<br>';
            $model->getAllUsersData();
            print '<br>';
            $model->getUserByID(9);
            print '<br>';
            $model->insertUser();
            print '<br>';
            $menu = new Menu();
            $menu->getMenu();
            ?>
        </div>
    </body>
</html>
