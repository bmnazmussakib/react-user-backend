<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FooterTable extends Model
{
    protected $table = 'footer_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $KeyType = 'int';
    public $timestamps = false;
}
