<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Sitemap\Contracts\Sitemapable;
use Spatie\Sitemap\Tags\Url;

class Bike extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $tables = 'bikes';

    protected $casts = [
        'color_codes' => 'array'
    ];

    public function images() {
        return $this->hasMany(BikeImage::class, 'bike_id', 'id');
    }

    public function prices() {
        return $this->hasMany(BikePrice::class, 'bike_id', 'id')->where('city_id', 1);
    }

    public function specifications() {
        return $this->hasMany(BikeSpecification::class, 'bike_id', 'id');
    }

    public function brand() {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

    public function toSitemapTag(): Url | string | array
    {
        return route('show.bikes', $this->make . '/' . $this->series . '/' . $this->version_name);
    }
}
