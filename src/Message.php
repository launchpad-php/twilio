<?php

namespace Launchpad\Twilio;

use Twilio\Rest\Client;

class Message
{
    public function send( $number, $body ): bool
    {
        try{
            $client = new Client( $_ENV['twilio_sid'], $_ENV['twilio_token'] );
        }catch( \Exception $e ){
            die( $e->getMessage() );
        }

        try{
            $client->messages->create( $number, [
                'from'      => $_ENV['twilio_sender'],
                'body'      => $body
            ]);
            return true;
        }catch( \Exception $e ){
            return false;
        }
    }
}