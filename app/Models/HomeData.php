<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HomeData extends Model
{
    protected $table = 'home_data';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $KeyType = 'int';
    public $timestamps = false;
}
