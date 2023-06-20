<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\portofolio;

class HomeController extends Controller
{
    //
    function show(){
        $data['profil'] = Profil::first();
        $data['portofolio'] = Portofolio::all();
        return view ('welcome',$data);
    }
}
