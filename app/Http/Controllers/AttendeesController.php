<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AttendeesController extends Controller
{
    //

    public function attendees(){
        return view('pages.attendees');
    }
}
