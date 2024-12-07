<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $table = 'admin_info';

    protected $fillable = ['username', 'password'];

    public $timestamps = false; // Add timestamps if necessary
}