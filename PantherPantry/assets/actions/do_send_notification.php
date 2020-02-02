<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

require_once('../includes/Email.php');
require_once('../includes/UserEmail.php');
header('Content-Type: application/json');

$notification_subject = $_POST['subject'];
$body = $_POST['notification_body'];
$message = new UserEmail();
$message->send_email($notification_subject, $body);

