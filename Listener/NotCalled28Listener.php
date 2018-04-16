<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled28Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}