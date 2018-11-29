<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table='users';
    protected $primarykey='user_id';
    protected $protected=['user_id'];
    // em vez de usar o $fillable, deixamos o $protected pois só um campo não podera ser alterado.
    
}
