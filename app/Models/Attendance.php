<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AttendanceDetail;

class Attendance extends Model
{
    use HasFactory;

    public function detail() {
        return $this->hasMany(AttendanceDetail::class);
    }
}
