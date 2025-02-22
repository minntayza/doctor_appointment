<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Schedule;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Booking $booking){
        return view('bookings',[
            'bookings' => $booking->all()
        ]);
    }


    public function book(Doctor $doctor, Schedule $schedule)    {
        if (!$doctor->isBooked($schedule)) { // Fix: Check if time is available
            Booking::create([
                'username' => auth()->user()->name,
                'user_mail' => auth()->user()->email,
                'doc_name' => $doctor->name,
                'doc_email' => $doctor->email,
                'doc_skills' => $doctor->specialization,
                'doc_diploma' => $doctor->diploma,
                'hospital' => $doctor->hospitals()->first()->name ?? 'N/A', // Fix: Fetch hospital properly
                'day' => $schedule->day,
                'date' => $schedule->date,
                'doctor_id' => $doctor->id,
                'schedule_id' => $schedule->id,
                'time' => $schedule->time,
                'end_time' => $schedule->end_time,
                'user_id' => auth()->user()->id,
            ]);
            return redirect('/bookings')->with('success', 'Booking successful.');
        } else {
            return back()->with('error', 'This time slot is already booked.');
        }
    }
    public function destroy(Booking $booking){
        $booking->delete();
        return back();
    }

    //doctor side
    public function viewAppointments(Doctor $doctor)
    {
        $filter = request(['search', 'status']);

        $bookings = auth()->user()->doctor->bookings()
            ->filter($filter)
            ->paginate(5)
            ->withQueryString();

        return view('doctor.view_appointments', compact('bookings'));
    }
}
