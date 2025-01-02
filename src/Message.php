<?php

namespace Launchpad\Twilio;

use Twilio\Exceptions\TwilioException;
use Twilio\Rest\Client;

class Message
{
    /**
     * Send SMS
     * @throws TwilioException
     */
    public function send($number, $body ): void
    {
        try{
            $client = new Client( $_ENV['twilio_sid'], $_ENV['twilio_token'] );
        }catch( \Exception $e ){
            die( $e->getMessage() );
        }

        $client->messages->create( $number, [
            'from'      => $_ENV['twilio_sender'],
            'body'      => $body
        ]);
    }
}