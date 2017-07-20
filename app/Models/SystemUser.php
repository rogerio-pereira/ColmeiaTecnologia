<?php

namespace App\Models;

use App\Notifications\SystemUserResetPasswordNotification;
use Illuminate\Database\Eloquent\SoftDeletes;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;
use Spatie\Activitylog\Traits\LogsActivity;

class SystemUser extends User
{
    use TransformableTrait;
    
    protected $table = "system_users";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'is_client'
    ];

    public function client()
    {
        return $this->hasOne(SystemClient::class, 'user_id');
    }

    /**
     * Send the password reset notification.
     *
     * @param  string  $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new SystemUserResetPasswordNotification($token));
    }
}
