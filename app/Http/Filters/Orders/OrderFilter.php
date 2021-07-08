<?php

namespace App\Http\Filters\Orders;

use App\Http\Filters\BaseFilters;

class OrderFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'date_from',
        'date_to',
        'status',
    ];

    /**
     * Filter the query to include results that contain the given value.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */

    protected function dateFrom($value)
    {
        if ($value) {
            return $this->builder->where('created_at', '>=', $value);
        }

        return $this->builder;
    }

    protected function dateTo($value)
    {
        if ($value) {
            return $this->builder->where('created_at', '<=', date('Y-m-d', strtotime("+1 day", strtotime($value))));
        }

        return $this->builder;
    }

    protected function status($value)
    {
        if ($value) {
            return $this->builder->where('status', $value);
        }

        return $this->builder;
    }
}
