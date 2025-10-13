<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachBooking extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'email',
        'phone',
        'service_booked',
        'start',
        'end',
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
