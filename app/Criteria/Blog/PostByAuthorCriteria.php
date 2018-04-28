<?php

namespace App\Criteria\Blog;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class PostByCategoryCriteria
 * @package namespace App\Criteria\Blog;
 */
class PostByAuthorCriteria implements CriteriaInterface
{
    private $author_id;

    public function __construct($author_id)
    {
        $this->author_id = $author_id;
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
        $model = $model->where('author_id','=', $this->author_id);
        
        return $model;
    }
}
