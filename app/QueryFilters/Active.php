<?php
namespace App\QueryFilters;
 class Active extends Filters
{
    protected function applyFilter($builder){
        return $builder->where('active',request($this->filterName()));
     }

}
