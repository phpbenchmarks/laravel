<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled31Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}