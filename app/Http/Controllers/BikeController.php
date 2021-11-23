<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Brand;
use App\Models\City;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Arr;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::all();
        return Inertia::render('Bikes/index', compact('bikes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Bikes/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bike = Bike::create([
            'url' => $request['data']['url'],
            'make' => $request['data']['make'],
            'series' => $request['data']['series'],
            'version' => $request['data']['version'],
            'ex_showroom_price_mumb' => $request['data']['ex_showroom_price_mumb'],
            'image_url' => $request['data']['image_url'],
            'colors_name' => $request['data']['colors_name'],
            'colors_rgb' => $request['data']['colors_rgb'],
            'fuel_type' => $request['data']['fuel_type'],
            'max_power' => $request['data']['max_power'],
            'rated_power' => $request['data']['rated_power'],
            'max_troque' => $request['data']['max_troque'],
            'emission_standard' => $request['data']['emission_standard'],
            'displacement' => $request['data']['displacement'],
            'bore' => $request['data']['bore'],
            'stroke' => $request['data']['stroke'],
            'valve_per_cylinder' => $request['data']['valve_per_cylinder'],
            'compression_ratio' => $request['data']['compression_ratio'],
            'ignition' => $request['data']['ignition'],
            'spark_plugs' => $request['data']['spark_plugs'],
            'cooling_system' => $request['data']['cooling_system'],
            'transmission' => $request['data']['transmission'],
            'transmission_type' => $request['data']['transmission_type'],
            'clutch' => $request['data']['clutch'],
            'fuel_delivery_system' => $request['data']['fuel_delivery_system'],
            'fuel_tank_capacity' => $request['data']['fuel_tank_capacity'],
            'reserve_fuel_capacity' => $request['data']['reserve_fuel_capacity'],
            'riding_range' => $request['data']['riding_range'],
            'mileage_arai' => $request['data']['mileage_arai'],
            'mileage_owner_reported' => $request['data']['mileage_owner_reported'],
            'top_speed' => $request['data']['top_speed'],
            'battery_charging_time' => $request['data']['battery_charging_time'],
            'carrying_capacity' => $request['data']['carrying_capacity'],
            'battery_capacity' => $request['data']['battery_capacity'],
            'battery_type' => $request['data']['battery_type'],
            'motor_type' => $request['data']['motor_type'],
            'charger_output' => $request['data']['charger_output'],
            'braking_system' => $request['data']['braking_system'],
            'front_brake_type' => $request['data']['front_brake_type'],
            'calliper_type' => $request['data']['calliper_type'],
            'front_wheel_size' => $request['data']['front_wheel_size'],
            'rear_wheel_size' => $request['data']['rear_wheel_size'],
            'front_tyre_size' => $request['data']['front_tyre_size'],
            'tyre_type' => $request['data']['tyre_type'],
            'radials_tyre' => $request['data']['radials_tyre'],
            'wheel_type' => $request['data']['wheel_type'],
            'front_suspension' => $request['data']['front_suspension'],
            'rear_suspension' => $request['data']['rear_suspension'],
            'kerb_weight' => $request['data']['kerb_weight'],
            'overall_length' => $request['data']['overall_length'],
            'overall_width' => $request['data']['overall_width'],
            'overall_height' => $request['data']['overall_height'],
            'wheel_base' => $request['data']['wheel_base'],
            'ground_clear_ance' => $request['data']['ground_clear_ance'],
            'seat_height' => $request['data']['seat_height'],
            'chassis_type' => $request['data']['chassis_type'],
            'battery_warranty' => $request['data']['battery_warranty'],
            'motor_warranty' => $request['data']['motor_warranty'],
            'odometer' => $request['data']['odometer'],
            'drls' => $request['data']['drls'],
            'mobile_app_connectivity' => $request['data']['mobile_app_connectivity'],
            'gps_navigation' => $request['data']['gps_navigation'],
            'front_storage_box' => $request['data']['front_storage_box'],
            'under_seat_storage' => $request['data']['under_seat_storage'],
            'aho' => $request['data']['aho'],
            'speed_ometer' => $request['data']['speed_ometer'],
            'fuel_guage' => $request['data']['fuel_guage'],
            'tacho_ometer' => $request['data']['tacho_ometer'],
            'stand_alarm' => $request['data']['stand_alarm'],
            'stepped_seat' => $request['data']['stepped_seat'],
            'num_tripmeters' => $request['data']['num_tripmeters'],
            'low_fuel_indicator' => $request['data']['low_fuel_indicator'],
            'low_oil_indicator' => $request['data']['low_oil_indicator'],
            'low_battery_indicator' => $request['data']['low_battery_indicator'],
            'pillion_backrest' => $request['data']['pillion_backrest'],
            'pillion_grabrail' => $request['data']['pillion_grabrail'],
            'pillion_seat' => $request['data']['pillion_seat'],
            'pillion_footrest' => $request['data']['pillion_footrest'],
            'digital_fuel_guage' => $request['data']['digital_fuel_guage'],
            'start_type' => $request['data']['start_type'],
            'shift_light' => $request['data']['shift_light'],
            'antilock_braking_system' => $request['data']['antilock_braking_system'],
            'killswitch' => $request['data']['killswitch'],
            'clock' => $request['data']['clock'],
            'electric_system' => $request['data']['electric_system'],
            'battery' => $request['data']['battery'],
            'headlight_type' => $request['data']['headlight_type'],
            'headlight_blub_type' => $request['data']['headlight_blub_type'],
            'brake_tail_light' => $request['data']['brake_tail_light'],
            'turn_signal' => $request['data']['turn_signal'],
            'pass_light' => $request['data']['pass_light'],
            'additional_features' => $request['data']['additional_features'],
            'city' => $request['data']['city'],
            'about_model' => $request['data']['about_model'],
        ]);

        return $bike;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $postsReq  = Http::get(config('lwg.wp_api_posts'));

        // $posts = $postsReq->json();
        // $media1Req = Http::get($posts['0']['_links']['wp:featuredmedia']['0']['href']);
        // $media1 = $media1Req->json()['source_url'];
        // $media2Req = Http::get($posts['1']['_links']['wp:featuredmedia']['0']['href']);
        // $media2 = $media2Req->json()['source_url'];


        // $posts['0']['thumb'] = $media1;
        // $posts['1']['thumb'] = $media2;
        // $postsData = [$posts['0'], $posts['1']];
        
        $bike = Bike::where('id', $id)->with(['images', 'prices', 'specifications', 'brand'])->get();
        $postsData = [];
        $dealers = Dealer::limit(10)->get();
        $moreBikes = Bike::where('brand_id', $bike[0]->brand_id)->limit(20)->get();
        $cities = City::all();
        $brands = Brand::all();
        return Inertia::render('Bikes/Details', compact('postsData', 'bike', 'dealers', 'moreBikes', 'cities', 'brands'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
