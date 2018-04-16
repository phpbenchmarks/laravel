<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled58Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}