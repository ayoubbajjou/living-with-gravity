<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Brand;
use App\Models\City;
use App\Models\Dealer;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bikes = Bike::whereNotNull('default_price')->with('brand')->paginate(20);
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
    public function show($brand, $series, $version_name)
    {
        $unslug = ucwords(str_replace('-', ' ', $series));
        $postsData = [];
        $bike = Bike::where('make', $brand)
            ->where('series', $unslug)
            ->where('version_name', $version_name)
            ->whereNotNull('default_price')
            ->where('brand_id', '!=', NULL)
            ->with(['images', 'prices', 'specifications', 'brand'])
            ->first();
        if (!$bike) {
            abort(404);
        }
        $data = [];


        $dealers = Dealer::where('brand_id', $bike->brand_id)->where('city_id', 1)->take(20)->get();
        $dealersCount = Dealer::where('brand_id', $bike->brand_id)->where('city_id', 1)->count();
        $moreBikes = Bike::where('brand_id', $bike->brand_id)
            ->whereNotNull('default_price')
            ->with('prices', 'images')->limit(20)
            ->get();
        $cities = City::all();
        $brands = Brand::where('site_id', 1)->get();
        $reviews = Review::where('bike_id', $bike->id)->where('approved', true)->with('user')->take(3)->get();
        foreach ($reviews as $key => $review) {
            $review->slug = Str::slug($review->title);
        }
        $rating = Review::where('bike_id', $bike->id)->where('approved', true)->select('mileage_rate', 'safety_rate', 'performance_rate', 'design_rate')->get();
        $rates = [];
        foreach ($rating as $key => $value) {
            $arr = array_filter([$value->mileage_rate, $value->mileage_rate, $value->safety_rate, $value->pricing_rate, $value->performace_rate, $value->design_rate]);
            $count = count($arr) > 0 ? count($arr) : 1;
            $value['avg'] = array_sum($arr) / $count;
            $rates[] = $value['avg'];
        }
        $arr = array_filter($rates);
        if (count($arr) > 0) {
            $bike['avg'] = number_format(array_sum($arr) / count($arr), 1, '.', '');
        }else {
            $bike['avg'] = 0;
        }

        $five = [];
        $foor = [];
        $three = [];
        $two = [];
        $one = [];

        foreach ($rating as $key => $value) {
            $keys = ['mileage_rate', 'safety_rate', 'performance_rate', 'design_rate' ];

            foreach($keys as $key) {
                if($value[$key] === "5") {
                    $five[] = 5;
                }elseif($value[$key] === "4") {
                    $foor[] = 4;
                }elseif($value[$key] === "3") {
                    $three[] = 3;
                }elseif($value[$key] === "2") {
                    $two[] = 2;
                }else {
                    $one[] = 1;
                }
            }
        }

        $ratingData = [$five, $foor, $three, $two, $one];
        $rates = [];
        foreach($ratingData as $val) {
            $totalRates = $rating->count() * 4;
            if($totalRates != 0 ) {
                $rates[] = number_format(count($val) / $totalRates * 100, 2, '.', "");
            }
        }

        return Inertia::render('Bikes/Details', compact('postsData', 'bike', 'dealers', 'moreBikes', 'cities', 'brands', 'dealersCount', 'reviews', 'rating', 'rates'));
    }

    /**
     */
    public function bikeVersions($id)
    {
        return Bike::where('model_id', $id)
            ->whereNotNull('default_price')
            ->select('model_id', 'id', 'version_id', 'version_name')
            ->get();
    }

    /**
     *
     */
    public function getDealersPagination(Request $request)
    {
        $dealers = Dealer::where('brand_id', $request->brand_id)->where('city_id', $request->city_id)->count();
        $dealersPagination = Dealer::where('brand_id', $request->brand_id)->where('city_id', $request->city_id)->skip(($request->page - 1) * 10)->take(10)->get();
        return [$dealersPagination, $dealers];
    }


    /**
     * allBikes the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function allBikes(Request $request, $brand)
    {
        $bikes = Bike::where('make', $brand)
            ->with('prices', 'images')
            ->whereNotNull('default_price')
            ->limit(50)
            ->get();
        return Inertia::render('Bikes/All', compact('bikes'));
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

    public function fetchBikeVariant(Request $request)
    {
        $versions1 = Bike::select('version_name')->where('series', $request->series1)->whereNotNull('model_id')->pluck('version_name');
        $versions2 = Bike::select('version_name')->where('series', $request->series2)->whereNotNull('model_id')->pluck('version_name');
        $versions3 = Bike::select('version_name')->where('series', $request->series3)->whereNotNull('model_id')->pluck('version_name');

        return [
            $versions1,
            $versions2,
            $versions3,
        ];
    }

    public function getBikeVariant(Request $request)
    {
        $versions = Bike::select('version_name')->where('series', $request->serie)->whereNotNull('model_id')->pluck('version_name');

        return $versions;
    }

    public function saveUserBike(Request $request)
    {
        $bike = Bike::where('series', $request->serie)->where('version_name', $request->version)->first();
        $user = User::where('id', auth()->user()->id)->first();

        if($bike) {
            $user->update([
                'bike_id' => $bike->id
            ]);

            return response()->json(['status' => 200]);
        }
        return response()->json(['status' => 500]);
    }

    public function popularBikes(Request $request)
    {
        $bikes = Bike::whereIn('id', $request->bikes)
            ->with('prices', 'images')
            ->whereNotNull('default_price')
            ->get();

        return $bikes;
    }
}
