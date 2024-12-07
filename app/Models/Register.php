<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Model;

// class Register extends Model
// {
//     //
// }
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Register extends Authenticatable
{
    protected $guarded = [];
}



// class Register extends Authenticatable
// {
//     protected $fillable = ['name', 'mail', 'bday', 'pass'];
// }
