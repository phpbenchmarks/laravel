<?php

namespace SmallOverload\Listener;

use SmallOverload\Event\SmallOverloadEvent;

class SmallOverload11Listener
{
    public function handle(SmallOverloadEvent $event)
    {
        // nothing to do, this is just to benchmark event() call time
    }
}