<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\SystemClientRepository;
use App\Models\SystemClient;
use App\Validators\SystemClientsValidator;

/**
 * Class SystemClientRepositoryEloquent
 * @package namespace App\Repositories;
 */
class SystemClientRepositoryEloquent extends BaseRepository implements SystemClientRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return SystemClient::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
}
