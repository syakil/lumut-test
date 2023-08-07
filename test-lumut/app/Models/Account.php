<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Account extends Model implements Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'account';
    // default primary_key
    protected $primaryKey = 'username';
    // disabled increment because the primary key is string
    public $incrementing = false;
    // to hidden password while get data
    public function getAuthIdentifierName()
    {
        return 'username';
    }

    public function getAuthIdentifier()
    {
        return $this->{$this->getAuthIdentifierName()};
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function getRememberToken()
    {
        return $this->{$this->getRememberTokenName()};
    }

    public function setRememberToken($value)
    {
        $this->{$this->getRememberTokenName()} = $value;
    }

    public function getRememberTokenName()
    {
        return 'remember_token';
    }
    protected $hidden = [
        'password',
    ];
}
