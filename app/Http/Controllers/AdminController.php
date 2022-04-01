<?php

namespace App\Http\Controllers;
use App\Models\School;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function home(){
        return view("admin/dashboard");
    }
    
   
}
