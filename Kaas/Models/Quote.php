<?php
namespace Kaas\Models;
use \Illuminate\Database\Eloquent\Model;
/**
 * Created by PhpStorm.
 * User: joe
 * Date: 24/09/2016
 * Time: 16:42
 */
class Quote extends Model
{
    protected $hidden = [
        'id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];
}