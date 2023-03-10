<?php

namespace App\Http\Controllers;

use App\Models\ServiceTable;
use Illuminate\Http\Request;

class ServiceTableController extends Controller
{
    function onSelect(){
        $result = ServiceTable::all();
        return $result;
    }
}
