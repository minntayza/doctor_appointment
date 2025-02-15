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
    
    protected $fillable=['username','user_mail','doc_name','doc_email','doc_skills','doc_diploma','day','date','hospital','doctor_id', 'time', 'end_time','schedule_id','user_id'];
}
