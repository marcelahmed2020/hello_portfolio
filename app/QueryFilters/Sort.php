<?php
namespace App\QueryFilters;
class Sort  extends Filters
{
    protected function applyFilter($builder){
        return $builder->orderBy('name',request($this->filterName()));
    }
}
