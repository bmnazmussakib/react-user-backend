<?php

namespace App\Http\Controllers;

use App\Models\FooterTable;
use Illuminate\Http\Request;

class FooterTableController extends Controller
{
    function onSelect(){
        $result = FooterTable::all();

        return $result;
    }
}
