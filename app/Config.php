<?php
/**
 * Created by PhpStorm.
 * User: ToXaHo
 * Date: 24.04.2017
 * Time: 23:53
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    protected $table = 'config';

    protected $fillable = [
        'namesite', 'payment', 'shop_id_digiseller', 'id_tovar_digiseller', 'password_digiseller', 'shop_id_freekassa', 'secret_word_freekassa', 'vkgroup'
    ];
}
