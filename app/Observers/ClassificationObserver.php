<?php

namespace App\Observers;

use App\Models\Classification;

class ClassificationObserver
{
    /**
     * Handle the classification "saving" event.
     *
     * @param  \App\Models\Classification  $classification
     * @return void
     */
    public function saving(Classification $classification)
    {
        if ($category->parent) {
            Classification::withoutEvents(function () use ($classification) {
                $classification->forceFill([
                    'country_id' => $classification->parent->country_id,
                ]);
            });
        }
    }
}
