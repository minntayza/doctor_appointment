<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }

public function scopeFilter($query, $filter = [])
{
    if($search = $filter['search'] ?? null){
        $query->whereHas('user', function ($userQuery) use ($search) {
            $userQuery->where('name', 'like', '%' . $search . '%'); // Search by patient's name
        });
    }

    // $query->when($filter['status'] ?? false, function ($query, $status) {
    //     $query->where('is_booked', $status === 'upcoming' ? 1 : 0);
    // });
}
    protected $fillable=['username','user_mail','doc_name','doc_email','doc_skills','doc_diploma','day','date','hospital','doctor_id', 'time', 'end_time','schedule_id','user_id'];
}
