<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = ['guest_name', 'guest_mail', 'rewiew'];

    public function doctor() {
        return $this->belongsTo(Doctor::class);
    }
}
