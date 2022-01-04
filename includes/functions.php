<?php

function check_if_user_exists($users,$email,$password)
    {
        foreach($users as $user)
        {
            if($user['email'] == $email && $user['password'] == $password)
            {
                $_SESSION['user'] = $user;
                $_SESSION['success']['loggedin'] = "inta wahd menna";
                $_SESSION['errors']['loggedin'] = "";
                return true;
            }
        }
        return false;
    }