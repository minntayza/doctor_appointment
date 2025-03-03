<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = ['day', 'time', 'end_time','date'];
    public function hospitalDoctors()
    {
        return $this->hasMany(hospital_doctor::class); // Or belongsToMany if you want to access Doctor and Hospital directly
    }

    // If you want to access doctors and hospitals directly through the schedule
    public function doctors() {
        return $this->belongsToMany(Doctor::class, 'hospital_doctor', 'schedule_id', 'doctor_id');
    }

    public function hospitals() {
        return $this->belongsToMany(Hospital::class, 'hospital_doctor', 'schedule_id', 'hospital_id');
    }
}
