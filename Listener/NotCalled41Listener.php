<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\NotCalledEvent;

class NotCalled41Listener
{
    public function handle(NotCalledEvent $event)
    {
        // should never be called
    }
}