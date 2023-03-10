<?php

namespace App\Http\Controllers;

use App\Models\ChartData;
use Illuminate\Http\Request;

class ChartDataController extends Controller
{
    function onAllSelect(){
        $result = ChartData::all();
        return $result;
    }
}
