<?php

namespace App\Http\Controllers;

use App\Models\HomeData;
use Illuminate\Http\Request;

class TotalProjectController extends Controller
{
    function TotalProject(){
        $result = HomeData::select('total_project', 'total_client', 'cup_of_coffee')->get();
        return $result;
    }
}
