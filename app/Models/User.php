<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\MediaLibrary\HasMedia\Interfaces\HasMedia;

class User extends Authenticatable
{
    use Notifiable;
    use HasMediaTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'lastname', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function favouritePins()
    {
        return $this->belongsToMany(Pins::class, 'favorites', 'user_id', 'pin_id')
            ->withTimestamps()->withPivot(['created_at']);
    }
    public function path()
    {

        $media = $this->getMedia();

        if (isset($media[0])) {
            $path = $media[0]->getUrl();
        } else {
            $path = 'http://via.placeholder.com/575x300?text=Image+unavailable';
        }

        return $path;
    }
}
