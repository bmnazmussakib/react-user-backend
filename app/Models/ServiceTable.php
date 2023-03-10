<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceTable extends Model
{
    protected $table = 'services_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $KeyType = 'int';
    public $timestamps = false;
}
