<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    protected $primaryKey='user_id';
    protected $guarded=['user_id'];
    // em vez de usar o $fillable, deixamos o $protected pois só um campo não podera ser alterado.

}
