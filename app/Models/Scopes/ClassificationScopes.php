<?php

namespace App\Models\Scopes;

use Illuminate\Database\Eloquent\Builder;

/**
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category parentsOnly()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category leafsOnly()
 */
trait ClassificationScopes
{
    /**
     * Scope the query to include parent classifications.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeParentsOnly(Builder $builder)
    {
        return $builder->doesntHave('parent');
    }

    /**
     * Scope the query to include leaf classifications.
     *
     * @param \Illuminate\Database\Eloquent\Builder $builder
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeLeafsOnly(Builder $builder)
    {
        return $builder->doesntHave('subclassifications');
    }
}
