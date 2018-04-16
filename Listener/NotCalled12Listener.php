<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled12Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}