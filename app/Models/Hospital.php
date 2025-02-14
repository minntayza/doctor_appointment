<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;
    protected $fillable = ['name','address','email','phone_num'];
    public function doctors() {
        return $this->belongsToMany(Doctor::class, 'hospital_doctor');
    }

    public function hospitalDoctors() {
        return $this->hasMany(hospital_doctor::class);
    }

    public function schedules() {
        return $this->belongsToMany(Schedule::class, 'hospital_doctor', 'hospital_id', 'schedule_id');
    }
    public static function scopeFilter($query, $filter = []) {
        if($search = $filter['search'] ?? null){
            $query = $query->where('name', 'like', '%'.$search.'%');
        }
    }
}
