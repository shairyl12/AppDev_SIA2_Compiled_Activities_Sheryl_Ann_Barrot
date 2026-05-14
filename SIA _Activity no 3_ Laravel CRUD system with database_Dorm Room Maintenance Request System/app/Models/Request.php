<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    protected $fillable = [
    'student_name',
    'room_number',
    'issue_type',
    'description',
    'status'
];
}

