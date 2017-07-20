<?php

namespace App\Criteria\Blog;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class PostByCategoryCriteria
 * @package namespace App\Criteria\Blog;
 */
class PostByCategoryCriteria implements CriteriaInterface
{
    private $post_category_id;

    public function __construct($post_category_id)
    {
        $this->post_category_id = $post_category_id;
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
        $model = $model->where('post_category_id','=', $this->post_category_id);
        
        return $model;
    }
}
