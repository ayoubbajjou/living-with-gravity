<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brand';

    public function bikes() {
        return $this->hasMany(Bike::class);
    }
    
    public function dealers() {
        return $this->hasMany(Dealer::class, 'brand_id', 'id');
    }
}
