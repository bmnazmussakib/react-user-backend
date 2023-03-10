<?php

namespace App\Http\Controllers;

use App\Models\WebsiteInformation;
use Illuminate\Http\Request;

class WebsiteInformationController extends Controller
{
    function onSelect(){
        $result = WebsiteInformation::all();

        return $result;
    }
}
