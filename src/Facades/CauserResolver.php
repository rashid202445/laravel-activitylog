<?php

namespace RashidSiaghi\Activitylog\Facades;

use Illuminate\Support\Facades\Facade;
use RashidSiaghi\Activitylog\CauserResolver as ActivitylogCauserResolver;

/**
 * @method static \Illuminate\Database\Eloquent\Model|null resolve(\Illuminate\Database\Eloquent\Model|int|string|null $subject = null)
 * @method static \RashidSiaghi\Activitylog\CauserResolver resolveUsing(\Closure $callback)
 * @method static \RashidSiaghi\Activitylog\CauserResolver setCauser(\Illuminate\Database\Eloquent\Model|null $causer)
 *
 * @see \RashidSiaghi\Activitylog\CauserResolver
 */
class CauserResolver extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return ActivitylogCauserResolver::class;
    }
}
