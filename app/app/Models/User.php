<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'password'
    ];
    protected $table = 'users';
    protected $connection = 'mysql';
    protected $primaryKey = 'id';
    public $incrementing = true;

}
