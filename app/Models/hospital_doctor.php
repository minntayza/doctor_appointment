<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital_doctor extends Model
{
    use HasFactory;
    protected $fillable = ['schedule_id','hospital_id','doctor_id'];
    protected $table = 'hospital_doctor';

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }

    // A doctor-hospital pairing can have one schedule
    public function schedule()
    {
        return $this->belongsTo(Schedule::class); // This represents the one-to-many from schedule to hospital_doctor
    }
}
