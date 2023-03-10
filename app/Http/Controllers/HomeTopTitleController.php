<?php

namespace App\Http\Controllers;

use App\Models\HomeData;
use Illuminate\Http\Request;

class HomeTopTitleController extends Controller
{
    function TopTitle(){
        $result = HomeData::select('home_title', 'home_subtitle')->get();
        return $result;
    }
}
