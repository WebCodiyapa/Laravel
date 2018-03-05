<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class UserFeedBack extends Authenticatable
{
    use Notifiable;

    protected $table = 'feedback';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'pin_id', 'comment', 'raiting'
    ];


}
