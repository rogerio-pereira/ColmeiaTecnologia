<?php

namespace App\Criteria\Sistema;

use Prettus\Repository\Contracts\CriteriaInterface;
use Prettus\Repository\Contracts\RepositoryInterface;

/**
 * Class UserCriteria
 * @package namespace App\Criteria\Sistema;
 */
class UserCriteria implements CriteriaInterface
{
    private $is_client;

    public function __construct($is_client)
    {
        $this->is_client = $is_client;
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
        $model = $model->where('is_client','=', $this->is_client);
        
        return $model;
    }
}
