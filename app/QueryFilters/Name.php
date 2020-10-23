<?php
namespace App\QueryFilters;
class Name extends Filters
{
    protected function applyFilter($builder){
        return $builder->where('name',request($this->filterName()));
    }
}
