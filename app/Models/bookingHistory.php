<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookingHistory extends Model
{
    use HasFactory;

    protected $table = 'bookinghistory';

    protected $primaryKey = 'bookinghistID';

    public $incrementing = false;
 
    protected $keyType = 'string';

    protected $fillable = [
        'bookinghistID',
        'patientName',
        'patientEmail',
        'patientPhone',
        'patientGender',
        'doctorName',
        'specialist', 
        'bookingDate',
        'bookingTime',
        'venue',
        'upload_status',
    ];
    public $timestamps = false;
}
