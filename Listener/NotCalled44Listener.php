<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled44Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}