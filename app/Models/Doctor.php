<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = ['photo', 'phone_number', 'studio_address', 'CV'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function specializations() {
        return $this->belongsToMany(Specialization::class);
    }

    public function performances() {
        return $this->belongsToMany(Performance::class);
    }
}
