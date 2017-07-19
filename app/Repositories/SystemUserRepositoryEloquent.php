<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SystemUserRepository;
use App\Models\SystemUser;
use App\Validators\SystemUserValidator;

/**
 * Class SystemUserRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SystemUserRepositoryEloquent extends BaseRepository implements SystemUserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SystemUser::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
