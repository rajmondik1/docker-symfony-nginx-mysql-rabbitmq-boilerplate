<?php


namespace App\Message\MessageHandler;


use App\Message\DoSomethingMessage;
use Symfony\Component\Messenger\Handler\MessageHandlerInterface;

class RabbitMessageHandler implements MessageHandlerInterface
{
    public function __invoke(DoSomethingMessage $message)
    {
        //Query needed data from db

        // create templates / other business logic

        // other stuff
        // TODO: Implement __invoke() method.
    }

}