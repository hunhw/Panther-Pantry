<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

require_once ("Database.php");

class UserEmail
{
    public function send_email($s, $body)
    {
        $name = "Panther Pantry Notifications";
        $email = "panther.pantry@pcc.edu";
        $recipient_email = "ashley.neal@pcc.edu";
        $subject = $s;
        $from = $name . " <" . $email . ">";
        $body_email = $body;
        $user_email = new Email($recipient_email, $from, $subject, $body_email);
        $user_email->send();
    }

    public function store_email($result, $body) {
        if ($result == true) {
            $notification = new Database();
            $notification->insert_notification($body);

            header("Location: ../../notification_successful.php");
        } else {
            header("Location: ../../notification_failure.php");
        }
    }
}
