<?php

namespace App\Http\Controllers;

use App\Models\HomeData;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    function selectVideo(){
        $result = HomeData::select('video_description', 'video_url')->get();

        return $result;
    }
}
