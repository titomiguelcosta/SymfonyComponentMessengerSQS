<?php

namespace App\MessageHandler;

use App\Message\HelloWorldMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class HelloWorldHandler implements MessageHandlerInterface
{
    public function __invoke(HelloWorldMessage $message)
    {
        echo $message->message;
    }
}