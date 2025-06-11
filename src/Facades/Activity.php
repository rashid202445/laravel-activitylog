<?php

namespace RashidSiaghi\Activitylog\Facades;

use Illuminate\Support\Facades\Facade;
use RashidSiaghi\Activitylog\PendingActivityLog;

/**
 * @method static \RashidSiaghi\Activitylog\ActivityLogger setLogStatus(\RashidSiaghi\Activitylog\ActivityLogStatus $logStatus)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger performedOn(\Illuminate\Database\Eloquent\Model $model)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger on(\Illuminate\Database\Eloquent\Model $model)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger causedBy(\Illuminate\Database\Eloquent\Model|string|int|null $modelOrId)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger by(\Illuminate\Database\Eloquent\Model|string|int|null $modelOrId)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger causedByAnonymous()
 * @method static \RashidSiaghi\Activitylog\ActivityLogger byAnonymous()
 * @method static \RashidSiaghi\Activitylog\ActivityLogger event(string $event)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger setEvent(string $event)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger withProperties(mixed $properties)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger withProperty(string $key, mixed $value)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger createdAt(\DateTimeInterface $dateTime)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger useLog(string|null $logName)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger inLog(string|null $logName)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger tap(callable $callback, string|null $eventName = null)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger enableLogging()
 * @method static \RashidSiaghi\Activitylog\ActivityLogger disableLogging()
 * @method static \RashidSiaghi\Activitylog\Contracts\Activity|null log(string $description)
 * @method static mixed withoutLogs(\Closure $callback)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger|mixed when(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static \RashidSiaghi\Activitylog\ActivityLogger|mixed unless(\Closure|mixed|null $value = null, callable|null $callback = null, callable|null $default = null)
 * @method static void macro(string $name, object|callable $macro)
 * @method static void mixin(object $mixin, bool $replace = true)
 * @method static bool hasMacro(string $name)
 * @method static void flushMacros()
 *
 * @see \RashidSiaghi\Activitylog\PendingActivityLog
 */
class Activity extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return PendingActivityLog::class;
    }
}
