<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfficeSpacePhoto extends Model
{
    use HasFactory;

    protected $fillable = [
        'photo',
        'office_space_id',
    ];
}
