<?php

namespace App\Http\Controllers;

use App\Models\ClientReview;
use Illuminate\Http\Request;

class ClientReviewController extends Controller
{
    function onAllSelect(){
        $result = ClientReview::all();
        return $result;
    }
}
