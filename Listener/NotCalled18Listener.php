<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled18Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}