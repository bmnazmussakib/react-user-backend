<?php

namespace App\Http\Controllers;

use App\Models\HomeData;
use Illuminate\Http\Request;

class TechDescController extends Controller
{
    function TechDesc(){
        $result = HomeData::select('tech_description')->get();
        return $result;
    }
}
