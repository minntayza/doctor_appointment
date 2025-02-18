<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $bookings = Booking::all();
        $pendingBookingsCount = Booking::where('is_booked', true)->count();
        $bookingsCount = Booking::where('is_booked', false)->count();
        return view('admin.admin_dashboard', ['bookings'=> $bookings, 'pendingBookingsCount' => $pendingBookingsCount,'bookingsCount'=>$bookingsCount]);
    }
    public function users(){
        $filter = request(key: ['search']);
        return view('admin.manage_users', ['users' => User::filter($filter)->paginate(5)->withQueryString()]);
    }
    public function logout()
{
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/')->with('success', 'Logged out successfully!');
}
    public function bookings(){
        $bookings = Booking::all();
        return view('admin.bookings',['bookings' => $bookings]);
    }
    public function doctors(){
        $filter = request(key: ['search']);
        return view('admin.manage_doctors',['doctors'=>Doctor::filter($filter)->latest()->cursorPaginate(5)->withQueryString()]);
    }
    public function hospitals(){
        $hospitals = Hospital::all();
        return view('admin.manage_hospitals',['hospitals'=>$hospitals]);
    }
    public function toggleRole(Request $request, User $user)
    {
    $role = $request->role; // 'admin' or 'doctor'
    $status = $request->status; // 1 or 0

    if ($role === 'admin') {
        $user->is_admin = $status;
    } elseif ($role === 'doctor') {
        $user->is_doctor = $status;
    }
    $user->save();
    return response()->json(['message' => ucfirst($role) . ' role updated successfully!']);
    }
    public function approve($id){
        $booking = Booking::findOrFail($id);
        $booking->is_booked = true;
        $booking->save();
        return back()->with('success', 'Booking status updated successfully!');
    }
    public function cancel(Booking $booking){
        $booking->is_booked = false;
        $booking->save();
        return back()->with('success', 'Booking status updated successfully!');
    }
    public function addDoctor(){
        $hospitals = Hospital::all();
        $doctors = Doctor::all();
        return view('admin.add_doctor',['hospitals'=>$hospitals,'doctors'=>$doctors]);
    }
    public function delete($id){
        $booking = Booking::findOrFail($id);
        $booking->delete();
        return back()->with('success', 'Booking status updated successfully!');
    }
}
