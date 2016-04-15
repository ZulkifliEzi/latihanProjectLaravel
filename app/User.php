<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
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

	public static function valid($id='', $pass_up='') {
      return array(
        'email' => 'required|email|unique:users,email'.($id ? ",$id" : ''),
        'name' => 'required|min: 6|unique:users,name'.($id ? ",$id" : ''),
        'password' => ($pass_up ? '' : "required|min: 8|confirmed")
      );
    }
}
