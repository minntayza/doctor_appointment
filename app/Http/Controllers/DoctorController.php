<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\hospital_doctor;
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
            'doctor' => $doctor,
            'doctors' => Doctor::all() // Get all doctors correctly
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

    $doctor->hospitals()->attach($request->hospital_id, ['schedule_id' => null]);

    return back()->with('success', 'Doctor added successfully!');
}

//Doctor part
    public function doctorDashboard(Doctor $doctor){
        $upcomingAppointmentsCount = auth()->user()->doctor->bookings()->where('is_booked', '1')->count();
        $patientsCount = auth()->user()->doctor->bookings->count();
        return view('doctor.doctor_dashboard',['upcomingAppointmentsCount'=>$upcomingAppointmentsCount, 'patientsCount'=>$patientsCount]);
    }

    public function viewPatients(Doctor $doctor)
    {
        $bookings = $doctor->bookings()->paginate(5);
        return view('doctor.view_patients', compact('bookings'));
    }
    // public function manageSchedule(Doctor $doctor)
    // {
    //     $times = auth()->user()->doctor->bookings;
    //     return view('doctor.manage_schedule', compact('times', 'doctor'));
    // }
    public function manageSchedule()
    {
        $hospitals = Hospital::all();
        $doctorHospitals = auth()->user()->doctor->hospitals;
        $schedules = hospital_doctor::where('doctor_id', auth()->user()->doctor->id)->with('hospital', 'schedule')->get();
        return view('doctor.manage_schedule', ['schedules' => $schedules,'doctor' => auth()->user()->doctor,'hospitals' => $hospitals, 'doctorHospitals' => $doctorHospitals]);
    }

    public function storeSchedule(Request $request, Doctor $doctor)
    {
        $request->validate([
            'hospital_id' => 'required',
            'day' => 'required',
            'time' => 'required',
            'end_time' => 'required',
        ]);

        $schedule = Schedule::create([
            'day' => $request->day,
            'date' => $request->date,
            'time' => $request->time,
            'end_time' => $request->end_time,
        ]);

        hospital_doctor::create([
            'hospital_id' => $request->hospital_id,
            'doctor_id' => auth()->user()->doctor->id,
            'schedule_id' => $schedule->id
        ]);

        return redirect()->back()->with('success', 'Schedule added successfully');
    }

    public function updateSchedule(Request $request, Schedule $schedule)
{
    $request->validate([
        'day' => 'required|string',
        'date' => 'required|date|after_or_equal:today',
        'time' => 'required',
        'end_time' => 'required|after:time',
    ]);

    $schedule->update([
        'day' => $request->day,
        'date' => $request->date,
        'time' => $request->time,
        'end_time' => $request->end_time
    ]);

    return redirect()->back()->with('success', 'Schedule updated successfully');
}

    public function deleteSchedule($scheduleId)
{
    $doctor = auth()->user()->doctor;

    if (!$doctor) {
        return back()->withErrors(['error' => 'Unauthorized: You must be a doctor to delete schedules.']);
    }
    $hospitalDoctor = hospital_doctor::where('doctor_id', $doctor->id)
        ->where('schedule_id', $scheduleId)
        ->first();

    if (!$hospitalDoctor) {
        return back()->withErrors(['error' => 'Schedule not found or unauthorized.']);
    }

    Schedule::where('id', $scheduleId)->delete();

    $hospitalDoctor->delete();

    return redirect()->back()->with('success', 'Schedule deleted successfully');
}
}
