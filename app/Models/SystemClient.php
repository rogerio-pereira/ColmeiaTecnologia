<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;

class SystemClient extends Model implements Transformable
{
    use TransformableTrait;
    use LogsActivity;

    protected $table = "system_clients";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 
        'birthdate', 
        'phone', 
        'cellphone', 
        'cpf_cnpj', 
        'zipcode', 
        'street', 
        'number', 
        'complement', 
        'neighborhood', 
        'city', 
        'state', 
    ];
    
    /*
     * The attributes that are logged
     *
     * @var array
     */
    protected static $logAttributes = [
        'id',
        'user_id', 
        'birthdate', 
        'phone', 
        'cellphone', 
        'cpf_cnpj', 
        'zipcode', 
        'street', 
        'number', 
        'complement', 
        'neighborhood', 
        'city', 
        'state', 
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['birthdate', 'created_at'];

    public function user()
    {
        return $this->hasOne(SystemUser::class, 'id', 'user_id');
    }

}
