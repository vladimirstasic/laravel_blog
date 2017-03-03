<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];



    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function posts()
    {
        return $this->hasMany(Post::class);//vraca sve postove (Post::class sta vraca) od tog usera. A has meny mozemo citati ovako "User.php hasMany"
    }

    public function publish(Post $post)
    {
        $this->posts()->save($post); //posts je napravljena odmah iznad a sto nismo rekli create umesto save, pa zato sto vec postoji objekat post sa svim aprametrima koji nam trebaju i zato ne trebamo da pravimo niz u create funksciji i da ubacujemo sve u njega.
    }

}
