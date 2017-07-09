<?php

namespace App\Criteria\Blog;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class SearchPostCriteria
 * @package namespace App\Criteria\Blog;
 */
class SearchPostCriteria implements CriteriaInterface
{
    private $search;

    public function __construct($search)
    {
        $this->search = $search;
    }

    /**
     * Apply criteria in query repository
     *
     * @param                     $model
     * @param RepositoryInterface $repository
     *
     * @return mixed
     */
    public function apply($model, RepositoryInterface $repository)
    {
        $model = $model->where('title','LIKE', '%'.$this->search.'%');
        
        return $model;
    }
}
