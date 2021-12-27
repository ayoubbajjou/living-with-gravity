<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Brand;
use App\Models\City;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($name)
    {
        $brand = Brand::where('brand_name', $name)->where('site_id', 1)->with('bikes', 'dealers')->first();
        if(!$brand) {
            abort(404);
        }
        $moreBikes = Bike::where('brand_id', $brand->id)
                    ->whereNotNull('default_price')
                    ->with('prices', 'images')
                    ->limit(20)
                    ->get();

        $cities = City::all();
        $brands = Brand::all();

        return Inertia::render('Brand', compact('brand', 'moreBikes', 'cities', 'brands'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBrands()
    {
        return Brand::where('site_id', 1)->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getBrandsLimited()
    {
        return Brand::where('site_id', 1)->limit(10)->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        //
    }
}
