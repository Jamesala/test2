<?php
/**
 * Created by PhpStorm.
 * User: ToXaHo
 * Date: 13.05.2017
 * Time: 17:12
 */

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promo extends Model
{
    protected $table = 'promocodes';

    protected $fillable = [
        'code', 'count', 'price'
    ];
}