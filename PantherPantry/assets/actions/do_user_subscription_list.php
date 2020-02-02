<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

require_once ('../includes/Database.php');
session_start();

$cas = $_POST['pcc_cas'];
$rock = $_POST['pcc_rock'];
$south = $_POST['pcc_south'];
$syl = $_POST['pcc_syl'];
$email = $_SESSION[Database::USERS_EMAIL_KEY];


$db = new Database();

$db->updatesubscription($email, $cas, $rock, $south, $syl);


$cas_bool = ($cas == "on") ? 1 : 0;
$rock_bool = ($rock == "on") ? 1 : 0;
$south_bool = ($south == "on") ? 1 : 0;
$syl_bool = ($syl == "on") ? 1 : 0;

$_SESSION[Database::USERS_CASCADE] = $cas_bool;
$_SESSION[Database::USERS_ROCK_CREEK] = $rock_bool;
$_SESSION[Database::USERS_SOUTH_EAST] = $south_bool;
$_SESSION[Database::USERS_SYLVANIA] = $syl_bool;


header("Location: ../../subscription_list_options.php");
