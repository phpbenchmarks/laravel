<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\SmallOverloadEvent;

class SmallOverload24Listener
{
    public function handle(SmallOverloadEvent $event)
    {
        // nothing to do, this is just to benchmark event() call time
    }
}