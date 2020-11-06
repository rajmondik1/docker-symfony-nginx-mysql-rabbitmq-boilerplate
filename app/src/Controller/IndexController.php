<?php

namespace App\Controller;

use App\Message\DoSomethingMessage;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Messenger\MessageBusInterface;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route(path="/", name="index")
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function index()
    {
        return $this->json('Success');
    }

    /**
     * @Route(path="/test", name="test")
     *
     * @param MessageBusInterface $bus
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function test(MessageBusInterface $bus)
    {
        $bus->dispatch(new DoSomethingMessage(1));
        $this->dispatchMessage(new DoSomethingMessage(2));

        return new Response('Your message has been dispatched!');
    }
}