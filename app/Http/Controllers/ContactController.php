<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\ContactUS;

class ContactController extends Controller
{

 
    public function addContact(Request $request)
    {   
        $data = new ContactUS();
        $data->name = $request->name;
        $data->email = $request->email;
        $data->comment = $request->comment;
        $data->save ();
        return response ()->json ( $data );
    }
}
