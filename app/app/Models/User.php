<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserUtil
 *
 * @mixin Model
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 */
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
