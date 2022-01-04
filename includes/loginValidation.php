<?php
session_start();
$email = "";
$password = "";
$is_loggedIn = false;

if(isset($_POST['email']))
    {
        if(!empty($_POST['email']))
        {
            $email = $_POST['email'];
            $_SESSION['errors']['email'] = "";
        }

        else
        {
            $_SESSION['errors']['email'] = "Email is missing ya homar";
        }

        if(!empty($_POST['password']))
        {
            $password = $_POST['password'];
            $_SESSION['errors']['password'] = "";
        }
        
        else
        {
            $_SESSION['errors']['password'] = "password is missing ya meaafan";
        }

        $is_loggedIn = check_if_user_exists($users,$email,$password);

        if($is_loggedIn == false)
        {
            $_SESSION['success']['loggedin'] = "";
            $_SESSION['errors']['loggedin'] = "enta mesh wahd menna ya roh omk";
        }
    }
    