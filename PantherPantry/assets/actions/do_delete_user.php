<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

session_start();

require '../includes/Database.php';


$user_sessID = $_SESSION[Database::USERS_EMAIL_KEY];

$db = new Database();

$db->DeleteUser($user_sessID);

header('Location: ../../login.php');
