<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

session_start();

require_once('../includes/constants.php');
header('Content-Type: application/json');


if (isset($_POST['login-submit'])) {

    require_once('../includes/Database.php');

    $email = $_POST['mail'];
    $password = $_POST['pwd'];


    if (empty($email) && empty($password)) {
        header("Location: ../../login.php?login-error=EmptyFields");
        exit();

    } elseif (empty($email)) {
        header("Location: ../../login.php?login-error=EmptyMail" . $email);
        exit();

    } elseif (empty($password)) {
        header("Location: ../../login.php?login-error=EmptyPassword" . $password);
        exit();

    } else {
        $db = new Database();

        $user = $db->lookup_user($email);

        if (!$user || !$user[0]) {
            header("Location: ../../login.php?login-error=NoEmail");
            exit();
        }

        if ($password != $user[0][Database::USERS_PASSWORD_HASH_KEY]) {
            header("Location: ../../login.php?login-error=WrongPassword");
            exit();

        } else {
            $db->set_user($user[0]);
            header("Location: ../../user_dashboard.php?=success");
            exit();
        }

}

        }else{
            header("Location: ../../login.php");
            exit();
    }




