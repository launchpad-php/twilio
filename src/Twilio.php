<?php

namespace Launchpad\Twilio;

class Twilio
{
    public object $message;

    public function __construct()
    {
        $this->message = new Message();
    }
}