<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled60Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}