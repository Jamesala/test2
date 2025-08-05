<?php
/**
 * Created by PhpStorm.
 * User: ToXaHo
 * Date: 13.05.2017
 * Time: 17:16
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsePromo extends Model
{
    protected $table = 'promocode_use';

    protected $fillable = [
        'user_id', 'code_id'
    ];
}