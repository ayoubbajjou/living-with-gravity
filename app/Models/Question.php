<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['bike_id', 'question', 'answer', 'user_id'];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function bike() {
        return $this->belongsTo(Bike::class);
    }
}
