<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

require_once ('../includes/Database.php');
session_start();

if(isset($_POST['change-submit'])) {

    $email = $_SESSION[Database::USERS_EMAIL_KEY];
    $password = $_POST['pwd'];
    $password_repeat = $_POST['pwd-repeat'];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);


    if (empty($password) || empty($password_repeat)) {
        header("Location: ../../change_password.php?change-error=EmptyFields");
        exit();
    } else if ($password !== $password_repeat) {
        header("Location: ../../change_password.php?change-error=PasswordCheck");
        exit();
    } else if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        header("Location: ../../change_password.php?change-error=PasswordNotStrongEnough");
        exit();
    } else {
        $db = new Database();

        $db->reset_password($password , $email);

        header('Location: ../../change_password.php?change=successful');

    }

}