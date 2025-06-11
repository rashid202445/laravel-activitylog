<?php

namespace RashidSiaghi\Activitylog\Contracts;

use Closure;
use RashidSiaghi\Activitylog\EventLogBag;

interface LoggablePipe
{
    public function handle(EventLogBag $event, Closure $next): EventLogBag;
}
