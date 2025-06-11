
<?php

namespace RashidSiaghi\Activitylog\Traits;

trait LogsRelationshipChanges
{
    public function logRelationshipChange($relation, $action, $relatedId)
    {
        activity()
            ->performedOn($this)
            ->withProperties([
                'relation' => $relation,
                'action' => $action,
                'related_id' => $relatedId,
            ])
            ->log("تم {$action} علاقة {$relation}");
    }
}
