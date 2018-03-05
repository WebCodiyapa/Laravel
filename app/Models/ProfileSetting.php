<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class ProfileSetting extends Authenticatable
{
    use Notifiable;

    protected $table='profile_setting';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'reseive_around_me', 'loved_topics_update','show_my_position', 'user_id'
    ];



}
