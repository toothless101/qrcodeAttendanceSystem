<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentOfficerController extends Controller
{
    //

    public function std_dashboard(){
        return view('student-officers/std-pages.std_officer_dashboard');
    }
}
