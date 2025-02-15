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
        $pendingBookingsCount = Booking::where('is_booked', false)->count();
        return view('admin.admin_dashboard', ['bookings'=> $bookings, 'pendingBookingsCount' => $pendingBookingsCount]);
    }
    public function users(){
        $filter = request(key: ['search']);
        $users = User::all();
        return view('admin.manage_users', ['users' => User::filter($filter)->paginate(5)->withQueryString()]);
    }
    public function logout()
{
    auth()->logout();
    request()->session()->invalidate();
    request()->session()->regenerateToken();
    return redirect('/')->with('success', 'Logged out successfully!');
}
    public function edit(User $user){
        return view('admin.edit',['user' => $user]);
    }
    public function bookings(){
        $bookings = Booking::all();
        return view('admin.bookings',['bookings' => $bookings]);
    }
    public function doctors(){
        $doctors = Doctor::all();
        return view('admin.manage_doctors',['doctors'=>$doctors]);
    }
    public function hospitals(){
        $hospitals = Hospital::all();
        return view('admin.manage_hospitals',['hospitals'=>$hospitals]);
    }
}
