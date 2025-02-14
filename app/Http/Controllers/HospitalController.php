<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use Illuminate\Http\Request;

class HospitalController extends Controller
{
    public function index(Hospital $hospitals){
        $filter = request(['search','hospital']);
        return view('hospitals',[
            'hospitals' => $hospitals->filter($filter)->paginate(5)->withQueryString(),
        ]);
    }
    public function show(Hospital $hospital){
        return view('hospital_profile',[
            'hospital'=>$hospital,
        ]);
    }
}
