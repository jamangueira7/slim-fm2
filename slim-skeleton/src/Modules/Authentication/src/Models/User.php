<?php
/**
 * Created by PhpStorm.
 * User: Mangueira
 * Date: 02/10/2018
 * Time: 03:33
 */

namespace SonSlim\Authentication\Models;


use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'name','email','password'
    ];

    protected $hidden = [
      'password'
    ];

    protected function setPasswordAttribute($value)
    {
        //TODO adicionar regra para geração de hash de senha
    }
}