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
    public function destroyUser($id) {
        $user = User::findOrFail($id);
        $user->delete();
        return back()->with('success', 'User deleted successfully!');
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
        $filter = request()->only(['search', 'hospital', 'specialty']);
        return view('admin.manage_doctors', ['doctors' => Doctor::filter($filter)->latest()->paginate(5)->withQueryString()]);
    }
    public function hospitals(){
        $filter = request(key: ['search']);
        return view('admin.manage_hospitals',['hospitals'=>Hospital::filter($filter)->paginate(5)->withQueryString( )]);
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
    public function deleteDoctor($id){
        $doctor = Doctor::findOrFail($id);
        $doctor->delete();
        return back()->with('success', 'Doctor is deleted successfully!');
    }
    public function editDoctor($id){
        return view('admin.edit_doctor',['doctor'=>Doctor::findOrFail($id), 'hospitals'=>Hospital::all()]);
    }
    public function updateDoctor(Request $request, Doctor $doctor)
    {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255|unique:doctors,email,' . $doctor->id,
        'specialization' => 'required|string|max:255',
        'phone_num' => 'required|string|max:20',
        'diploma' => 'nullable|string|max:255',
        'hospital_id' => 'required|array',
        'hospital_id.*' => 'exists:hospitals,id'
    ]);

    $doctor->update([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'specialization' => $request->input('specialization'),
        'phone_num' => $request->input('phone_num'),
        'diploma' => $request->input('diploma'),
    ]);

    $doctor->hospitals()->syncWithPivotValues($request->input('hospital_id'), ['schedule_id' => 1]);

    return redirect('/manage-doctors')->with('success', 'Doctor updated successfully!');
    }
}
