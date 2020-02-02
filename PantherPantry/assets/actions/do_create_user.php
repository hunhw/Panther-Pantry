<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

/**
* Will be migrating all error messages and form posting to javascript to prevent loading of a new page time the form is posted.
* Eventually will be moving all of this code to the Database.php to reflect consistency between pages in the actions folder.
*/


if ( isset( $_POST[ 'signup-submit' ] ) ) {

    require('../includes/Database.php');

    $name = $_POST['name'];
    $lname = $_POST['lname'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $password_repeat = $_POST['pwd-repeat'];
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number = preg_match('@[0-9]@', $password);

    if (empty($email) && empty($password)) {
        header("Location: ../../index.php?signup-error=EmptyFields");
        exit();

    } else if (empty($email)) {
        header("Location: ../../index.php?signup-error=EmptyMail" . $email);
        exit();

    } else if (empty($password)) {
        header("Location: ../../index.php?signup-error=EmptyPassword" . $password);
        exit();


    } else if ($password !== $password_repeat) {
        header("Location: ../../index.php?signup-error=PasswordCheck&mail=" . $email);
        exit();

    } else if (!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
        header("Location: ../../index.php?signup-error=PasswordNotStrongEnough");
        exit();


    } else {
        $db = new Database();

        $user = $db->lookup_user($email);
        if (!empty($user)) {
            header("Location: ../../index.php?signup-error=UserTaken");
            exit();

        } else {
            $password = $_POST['pwd'];
            $password_repeat = $_POST['pwd-repeat'];
            $name = $_POST['name'];
            $lname = $_POST['lname'];
            $email = $_POST['mail'];
            $role = 'user';
            $cas = $_POST['pcc_cas'];
            $rock = $_POST['pcc_rock'];
            $south = $_POST['pcc_south'];
            $syl = $_POST['pcc_syl'];


            $conn = new Database();

            $new_user = $db->addUser($name, $lname, $email, $password, $cas, $rock, $south, $syl);

            if (in_array(null, $new_user, true) || in_array('', $new_user, true)) {
                echo "Row insertion failed.\n";
                die(print_r(sqlsrv_errors(), true));}


            else {
                    header("Location: ../../signup_successful.php");
                }
            }
        }
}





