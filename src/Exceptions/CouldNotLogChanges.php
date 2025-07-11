<?php

namespace RashidSiaghi\Activitylog\Exceptions;

use Exception;

class CouldNotLogChanges extends Exception
{
    public static function invalidAttribute($attribute): self
    {
        return new static("Cannot log attribute `{$attribute}`. Can only log attributes of a model or a directly related model.");
    }
}
