<?php

/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

function require_secure()
{
    if (!isset($_SERVER['HTTPS']) || $_SERVER['HTTPS'] !== 'on') {
        header('Location: https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
        exit();
    }
}

function require_login()
{
    if (!isset($_SESSION) || empty($_SESSION[database::USERS_EMAIL_KEY])) {
        header("Location: ../../login.php");
        exit();
    }
}



