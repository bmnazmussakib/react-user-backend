<?php

namespace App\Http\Controllers;

use App\Models\ProjectTable;
use Illuminate\Http\Request;

class ProjectTabelController extends Controller
{
    function onSelectFour(){
        $result = ProjectTable::limit(4)->get();
        return $result;
    }

    function onSelectAll(){
        $result = ProjectTable::all();
        return $result;
    }

    // function onSelectDetails(Request $req){
    //     $id = $req->input('id');
    //     $result = ProjectTable::where(['id' => $id])->get();
    //     return $result;
    // }

    function onSelectOne($id){
        
        $result = ProjectTable::where('id', $id)->get();
        return $result;
    }
}
