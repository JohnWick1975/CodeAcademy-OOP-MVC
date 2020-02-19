<?php

include_once 'Form.php';
include_once 'Table.php';
include_once '../Database.php';

class Model extends Database
{




    public function getUserByID($id)
    {
        $sql = "SELECT `id`, `name`, `email`, `password`, `date` FROM `users` WHERE `id`=$id";
        $usersArray = $this->select($sql);
        $table = new Table();
        return $table->printOneUserData($usersArray);
    }

    public function getAllUsersData()
    {
        $sql = "SELECT * FROM `users` WHERE 1";
        $usersArray = $this->select($sql);
        $table = new Table();
        return $table->printUserData($usersArray);
    }

    public function insertUser()
    {
            $form = new Form();
            $form->insertUserForm();

        if (isset($_POST['push'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['psw'];
            $sql = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name', '$email', '$password' )";
            $this->insert($sql);

        } elseif (isset($_POST['update'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['psw'];
            $sql = "UPDATE `users` SET `name`='$name',`email`='$email',`password`='$password' WHERE `email`= '$email'";
            $this->insert($sql);

        } elseif (isset($_POST['delete'])) {
            $email = $_POST['email'];
            $sql = "DELETE FROM `users` WHERE `email`= '$email'";
            $this->insert($sql);
        }

    }
}



?>