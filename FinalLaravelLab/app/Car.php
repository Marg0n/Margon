<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notifications\Notifiable;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Foundation\Auth\Stuff as Authenticatable;


// class Stuff extends Authenticatable
// {
//     //
//     use Notifiable;

//     /**
//      * The attributes that are mass assignable.
//      *
//      * @var array
//      */
//     protected $fillable = [
//         'name', 'email', 'password',
//     ];

//     *
//      * The attributes that should be hidden for arrays.
//      *
//      * @var array
     
//     protected $hidden = [
//         'password', 'remember_token',
//     ];

//     /**
//      * The attributes that should be cast to native types.
//      *
//      * @var array
//      */
//     protected $casts = [
//         'email_verified_at' => 'datetime',
//     ];
// }


class Car extends Model
{
    protected $table = "car";
	protected $primaryKey = 'id';
	public $timestamps = false;

	const CREATED_AT = 'creation_date';
    const UPDATED_AT = 'last_update';
}
