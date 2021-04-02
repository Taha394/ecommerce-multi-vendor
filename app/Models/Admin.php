<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable ;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;
    protected $table = 'admins';
    protected $fillable = ['name', 'photo', 'email', 'password', 'created_at', 'updated_at'];
    protected $hidden = ['password', 'remember_token'];
    /**
     * @var mixed|string
     */
    /**
     * @var mixed|string
     */

    public function getRememberToken()
    {
        return $this->remember_token;
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
}
