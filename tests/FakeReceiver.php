<?php

namespace Jarvis\Tests;

/**
 * @author Eric Chau <eriic.chau@gmail.com>
 */
class FakeReceiver
{
    public $event;
    public $analyzeEvent;
    public $controllerEvent;
    public $responseEvent;

    public function onEventBroadcast($event)
    {
        $this->event = $event;
    }

    public function onAnalyzeEvent($event)
    {
        $this->analyzeEvent = $event;
    }

    public function onControllerEvent($event)
    {
        $this->controllerEvent = $event;
    }

    public function onResponseEvent($event)
    {
        $this->responseEvent = $event;
    }
}