<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WebsiteInformation extends Model
{
    protected $table = 'website_information';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $KeyType = 'int';
    public $timestamps = false;
}
