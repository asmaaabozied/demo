<?php
//
//namespace App\Http\Filters\producttypes;
//
//use App\Http\Filters\BaseFilters;
//use Illuminate\Support\Arr;
//
///**
// * @property \Illuminate\Database\Eloquent\Builder|\App\Models\Product $builder
// */
//class producttypeFilter extends BaseFilters
//{
//    /**
//     * Registered filters to operate upon.
//     *
//     * @var array
//     */
//    protected $filters = [
//        'name',
//
//    ];
//
//    /**
//     * Filter the query by a given name.
//     *
//     * @param string|int $value
//     * @return \Illuminate\Database\Eloquent\Builder
//     */
//    protected function name($value)
//    {
//        if ($value) {
//            return $this->builder->whereTranslationLike('name', "%$value%");
//        }
//
//        return $this->builder;
//    }
//
//
//}


namespace App\Http\Filters\producttypes;

use App\Http\Filters\BaseFilters;

class producttypeFilter extends BaseFilters
{
    /**
     * Registered filters to operate upon.
     *
     * @var array
     */
    protected $filters = [
        'name',
    ];

    /**
     * Filter the query by a given name.
     *
     * @param string|int $value
     * @return \Illuminate\Database\Eloquent\Builder
     */
    protected function name($value)
    {
        if ($value) {
            return $this->builder->whereTranslationLike('name', "%$value%");
        }

        return $this->builder;
    }
}
