<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */


session_start();
session_unset();
session_destroy();

// Redirect to the login page:
header('Location: ../../login.php');
exit();
