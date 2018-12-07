<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    protected $table='user_info';
    protected $primaryKey='user_info_id';
    protected $guarded=['user_info_id'];
    // em vez de usar o $fillable, deixamos o $protected pois só um campo não podera ser alterado.

}
