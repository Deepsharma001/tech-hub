<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'categories';

    protected $fillable = ['category_name'];


	public $timestamps = false;
 

}
