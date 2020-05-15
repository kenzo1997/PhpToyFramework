<?php


class MailHandler {
    public function __construct($to, $msg, $subject, $headers) {
        $msg = wordwrap($msg, 70);
        mail($to, $subject, $msg, $headers);
    }
}


