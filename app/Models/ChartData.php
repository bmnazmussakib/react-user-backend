<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ChartData extends Model
{
    protected $table = 'chart_data';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $KeyType = 'int';
    public $timestamps = false;
}
