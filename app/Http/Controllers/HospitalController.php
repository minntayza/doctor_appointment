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
    public function create(){
        return view('admin.add_hospital');
    }
    public function store(Request $request)
    {

        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'address' => 'required|string|max:255',
        //     'email' => 'required|string|max:255',
        //     'phone_num' => 'required|string|max:20',
        //     'location' => 'required',
        // ]);

        $hospital = Hospital::create([
            'name' => $request->input('name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone_num' => $request->input('phone_num'),
            'location' => $request->input('location'),
        ]);
        // dd($hospital);
        $hospital->save();
        return redirect('/manage-hospitals')->with('success', 'Hospital added successfully!');
    }
    public function editHospital(Hospital $hospital){
        return view('admin.edit_hospital', ['hospital' => $hospital]);
    }
    public function updateHospital(Request $request, Hospital $hospital)
{
    // $request->validate([
    //     'name' => 'required|string|max:255',
    //     'address' => 'required|string|max:255',
    //     'email' => 'required|email|max:255',
    //     'phone_num' => 'required|string|max:20',
    //     'location' => 'required|text',
    // ]);

    $hospital->update([
        'name' => $request->input('name'),
        'address' => $request->input('address'),
        'email' => $request->input('email'),
        'phone_num' => $request->input('phone_num'),
        'location' => $request->input('location'),
    ]);
    $hospital->save();
    return redirect('/manage-hospitals')->with('success', 'Hospital updated successfully!');
}
}
