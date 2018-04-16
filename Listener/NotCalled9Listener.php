<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled9Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}