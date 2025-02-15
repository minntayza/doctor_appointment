<?php

namespace App\Http\Controllers;

use App\Models\Booking;
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
        $users = User::all();
        return view('admin.manage_users', ['users' => $users]);
    }
    public function destroy(){
        auth()->user()->destroy(auth()->user()->id);
        return redirect('/');
    }
}
