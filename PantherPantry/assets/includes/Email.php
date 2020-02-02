<?php
/**
 * Created by PhpStorm.
 * User: Ashley Neal and Hansan Hung
 * Date: 12/6/2019
 */

require_once('Mail.php');

class Email
{

    // IN PROGRESS
    const HOST = 'ssl://smtp.gmail.com';
    const PORT = '465';
    const USERNAME = 'php.testemail.ashleyneal@gmail.com';
    const PASSWORD = 'T3stemail!';

    private $to;
    private $body;
    private $subject;
    private $result;
    private $from;

    public function __construct($to, $from, $subject, $body)
    {
        $this->to = $to;
        $this->subject = $subject;
        $this->body = $body;
        $this->from = $from;
    }

    public function send()
    {
        $headers = ['To' => $this->to,
            'From' => $this->from,
            'Subject' => $this->subject,
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/html; charset=utf-8'];

        $transport = ['host' => Email::HOST,
            'port' => Email::PORT,
            'username' => Email::USERNAME,
            'password' => Email::PASSWORD,
            'auth' => TRUE];

        $smtp = Mail::factory('smtp', $transport);

        $this->result = $smtp->send($this->to, $headers, $this->body);

        $db = new UserEmail();
        $db->store_email($this->result, $this->body);
    }

    public function get_status()
    {
        return $this->result;
    }
}