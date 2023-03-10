<?php

namespace App\Http\Controllers;

use App\Models\ContactTable;
use Illuminate\Http\Request;

class ContactTableController extends Controller
{
    function onContactSend(Request $req){
        
        $name = $req->input('name');
        $email = $req->input('email');
        $msg = $req->input('msg');

        $result = ContactTable::insert(['name' => $name, 'email' => $email, 'message' => $msg]);

        if ($result) {
            return "Contact Successfully Posted";
        } else {
            return "Contact Post Failed";
        }
        
    }
}
