<?php

namespace RashidSiaghi\Activitylog\Traits;

use Illuminate\Database\Eloquent\Relations\MorphMany;
use RashidSiaghi\Activitylog\ActivitylogServiceProvider;

trait CausesActivity
{
    public function actions(): MorphMany
    {
        return $this->morphMany(
            ActivitylogServiceProvider::determineActivityModel(),
            'causer'
        );
    }
}
