<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTable extends Model
{
    protected $table = 'projects_table';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $KeyType = 'int';
    public $timestamps = false;
}
