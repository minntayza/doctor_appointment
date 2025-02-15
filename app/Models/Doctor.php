<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'address', 'email', 'phone_num'];

    public static function scopeFilter($query, $filter = [])
    {
        if ($search = $filter['search'] ?? null) {
            $query = $query->where('name', 'like', '%' . $search . '%');
        }
        if ($hospital = $filter['hospital'] ?? null) {
            $query->whereHas('hospital', function ($hospitalQuery) use ($hospital) {
                $hospitalQuery->where('name', 'like', '%' . $hospital . '%');
            });
        }
        if ($specialty = $filter['specialty'] ?? null) {
            $query->where('specialization', 'like', '%' . $specialty . '%');
        }

        return $query;
    }

    public function hospitals()
    {
        return $this->belongsToMany(Hospital::class, 'hospital_doctor');
    }

    public function hospitalDoctors()
    {
        return $this->hasMany(HospitalDoctor::class); // Corrected capitalization
    }

    public function schedules()
    {
        return $this->belongsToMany(Schedule::class, 'hospital_doctor', 'doctor_id', 'schedule_id'); // Corrected capitalization
    }

    public function bookedUsers()
    {
        return $this->belongsToMany(User::class, 'doctor_user'); // Or hasMany(Booking::class) if it is a direct relation
    }

    public function isBooked(Schedule $schedule)
    {
        return $this->bookings()
            ->where('schedule_id', $schedule->id)
            ->exists();
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
