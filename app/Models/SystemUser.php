<?php

namespace App\Models;

use App\Notifications\SystemUserResetPasswordNotification;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class SystemUser extends User
{
    use TransformableTrait;

    protected $table = "system_users";

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
