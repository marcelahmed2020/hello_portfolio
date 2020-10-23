<?php
namespace App\QueryFilters;
class Limit extends Filters
{
    protected function applyFilter($builder){
        return $builder->take(request($this->filterName()));
    }
}
