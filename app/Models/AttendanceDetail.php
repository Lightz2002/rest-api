<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Attendance;

class AttendanceDetail extends Model
{
    use HasFactory;

    protected $guarded = []; //untuk dapat 

    public function attendances() {
        return $this->belongsTo(Attendance::class);
    }
}
