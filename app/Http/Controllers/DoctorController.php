<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Schedule;
use App\Models\Time;
use Carbon\Carbon;
use Illuminate\Http\Request;


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
    
//     public function doctor(){

//         return view('doctor_dashboard',[
//             'doctor' => auth()->user()->doctor
//         ]);
//     }
//     public function profile(){
//         return view('doctor_profile');
//     }
//     public function viewAppointment(){
//         return view('view_appointment');
//     }
//     public function accept(Booking $booking){
//         $booking->is_booked = true;
//         $booking->save();
//         return redirect('/view-appointments');
//     }
//     public function reject(Booking $booking){
//         $booking->delete();
//         return redirect('/view-appointments');
//     }
//     public function viewHospital(){
//         return view('edit_hospital');
//     }
//     public function editHospital(Request $request){
//         $request->validate([
//             'name' => 'required|string|exists:hospitals,name',
//         ]);

//         $hospital = Hospital::where('name', $request->name)->first();
//         if ($hospital) {
//             auth()->user()->doctor->hospital_id = $hospital->id;
//             auth()->user()->doctor->save();
//             return redirect('/doctor-dashboard')->with('success', 'Hospital changed successfully.');
//         }

//         return redirect()->back()->with('error', 'Hospital not found.');
//     }
//     public function editDays(){
//         return view('edit_sitting_days');
//     }
//     public function editSittingDays(Request $request)
//     {
//         $request->validate([
//             'date' => 'required|date',
//             'time' => 'required',
//         ]);

//         $dayName = Carbon::parse($request->date)->format('D'); // Mon, Tue, etc.
//         $time = Time::create([
//             'days' => $dayName,
//             'date' => $request->date,
//             'time' => $request->time,
//         ]);
//         $time->doctors()->attach(auth()->user()->doctor->id);
//         return redirect('/sitting-days')->with('success', 'Sitting day saved successfully!');
//     }
//     public function sittingDays(){
//         return view('sitting_days');
//     }
//     public function deleteDays(Time $time){
//         $time->delete();
//         $time->doctors()->detach(auth()->user()->doctor->id);
//         return redirect('/sitting-days')->with('success', 'Sitting day deleted successfully!');
//     }

// public function updateDays(Request $request, Time $time)
// {
//     $request->validate([
//         'days' => 'required|string',
//         'time' => 'required|string',
//     ]);

//     $time->update([
//         'days' => $request->days,
//         'time' => $request->time,
//     ]);
//     return redirect()->back()->with('success', 'Sitting day updated successfully.');
// }
}
