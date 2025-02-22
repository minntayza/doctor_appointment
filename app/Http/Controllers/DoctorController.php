<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Schedule;
use App\Models\Time;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    public function index(Doctor $doctors){
        $filter = request(['search','hospital','specialty']);
        return view('doctors',[
            'doctors' => $doctors->filter($filter)->orderBy('specialization')->cursorPaginate(5)->withQueryString(),
            'specialties' => Doctor::select('specialization')->distinct()->pluck('specialization')
        ]);
    }
    public function show(Doctor $doctor){
        return view('doctor_profile', [
            'doctor'=>$doctor,
            'doctors' => $doctor->all()
        ]);
    }

    public function create()
    {
        $hospitals = Hospital::all(); // Get all hospitals
        $doctors = Doctor::all();
        return view('admin.add_doctor', compact('hospitals', 'doctors'  ));
    }

    // Store Doctor
    public function store(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:users',
        'phone' => 'required|string|max:20',
        'specialization' => 'required|string',
        'hospital_id' => 'required|array',
        'hospital_id.*' => 'exists:hospitals,id',
        'diploma' => 'nullable|string',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt('password123'), // You should send an email to doctor to set password
        'is_doctor' => 1,
    ]);

    // Create doctor profile
    $doctor = Doctor::create([
        'name' => $request->name,
        'email' => $request->email,
        'specialization' => $request->specialization,
        'diploma' => $request->diploma,
        'phone_num' => $request->phone,
        'user_id' => $user->id,
    ]);

    $doctor->hospitals()->attach($request->hospital_id, ['schedule_id' => 1]);

    return back()->with('success', 'Doctor added successfully!');
}

//Doctor part
    public function doctorDashboard(Doctor $doctor){
        return view('doctor.doctor_dashboard');
    }

    public function viewPatients(Doctor $doctor){

        return view('doctor.view_patients');
    }
    public function manageSchedule(Doctor $doctor){
        return view('doctor.manage_schedule');
    }
}
