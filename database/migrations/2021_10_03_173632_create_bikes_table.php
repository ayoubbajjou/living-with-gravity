<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string('url', 150)->nullable();
            $table->string('make', 150)->nullable();
            $table->string('series', 150)->nullable();
            $table->string('model', 150)->nullable();
            $table->string('version', 150)->nullable();
            $table->string('ex_showroom_price_mumb', 150)->nullable();
            $table->string('image_url', 150)->nullable();
            $table->string('colors_name', 150)->nullable();
            $table->string('colors_rgb', 150)->nullable();
            $table->string('fuel_type', 150)->nullable();
            $table->string('max_power', 150)->nullable();
            $table->string('rated_power', 150)->nullable();
            $table->string('max_troque', 150)->nullable();
            $table->string('emission_standard', 150)->nullable();
            $table->string('displacement', 150)->nullable();
            $table->string('cylinders', 150)->nullable();
            $table->string('bore', 150)->nullable();
            $table->string('stroke', 150)->nullable();
            $table->string('valve_per_cylinder', 150)->nullable();
            $table->string('compression_ratio', 150)->nullable();
            $table->string('ignition', 150)->nullable();
            $table->string('spark_plugs', 150)->nullable();
            $table->string('cooling_system', 150)->nullable();
            $table->string('transmission', 150)->nullable();
            $table->string('transmission_type', 150)->nullable();
            $table->string('clutch', 150)->nullable();
            $table->string('fuel_delivery_system', 150)->nullable();
            $table->string('fuel_tank_capacity', 150)->nullable();
            $table->string('reserve_fuel_capacity', 150)->nullable();
            $table->string('riding_range', 150)->nullable();
            $table->string('mileage_arai', 150)->nullable();
            $table->string('mileage_owner_reported', 150)->nullable();
            $table->string('top_speed', 150)->nullable();
            $table->string('battery_charging_time', 150)->nullable();
            $table->string('carrying_capacity', 150)->nullable();
            $table->string('battery_capacity', 150)->nullable();
            $table->string('battery_type', 150)->nullable();
            $table->string('motor_type', 150)->nullable();
            $table->string('charger_output', 150)->nullable();
            $table->string('braking_system', 150)->nullable();
            $table->string('front_brake_type', 150)->nullable();
            $table->string('calliper_type', 150)->nullable();
            $table->string('front_wheel_size', 150)->nullable();
            $table->string('rear_wheel_size', 150)->nullable();
            $table->string('front_tyre_size', 150)->nullable();
            $table->string('tyre_type', 150)->nullable();
            $table->string('radials_tyre', 150)->nullable();
            $table->string('wheel_type', 150)->nullable();
            $table->string('front_suspension', 150)->nullable();
            $table->string('rear_suspension', 150)->nullable();
            $table->string('kerb_weight', 150)->nullable();
            $table->string('overall_length', 150)->nullable();
            $table->string('overall_width', 150)->nullable();
            $table->string('overall_height', 150)->nullable();
            $table->string('wheel_base', 150)->nullable();
            $table->string('ground_clear_ance', 150)->nullable();
            $table->string('seat_height', 150)->nullable();
            $table->string('chassis_type', 150)->nullable();
            $table->string('battery_warranty', 150)->nullable();
            $table->string('motor_warranty', 150)->nullable();
            $table->string('odometer', 150)->nullable();
            $table->string('drls', 150)->nullable();
            $table->string('mobile_app_connectivity', 150)->nullable();
            $table->string('gps_navigation', 150)->nullable();
            $table->string('front_storage_box', 150)->nullable();
            $table->string('under_seat_storage', 150)->nullable();
            $table->string('aho', 150)->nullable();
            $table->string('speed_ometer', 150)->nullable();
            $table->string('fuel_guage', 150)->nullable();
            $table->string('tacho_ometer', 150)->nullable();
            $table->string('stand_alarm', 150)->nullable();
            $table->string('stepped_seat', 150)->nullable();
            $table->string('num_tripmeters', 150)->nullable();
            $table->string('tripmeter_type', 150)->nullable();
            $table->string('low_fuel_indicator', 150)->nullable();
            $table->string('low_oil_indicator', 150)->nullable();
            $table->string('low_battery_indicator', 150)->nullable();
            $table->string('pillion_backrest', 150)->nullable();
            $table->string('pillion_grabrail', 150)->nullable();
            $table->string('pillion_seat', 150)->nullable();
            $table->string('pillion_footrest', 150)->nullable();
            $table->string('digital_fuel_guage', 150)->nullable();
            $table->string('start_type', 150)->nullable();
            $table->string('shift_light', 150)->nullable();
            $table->string('antilock_braking_system', 150)->nullable();
            $table->string('killswitch', 150)->nullable();
            $table->string('clock', 150)->nullable();
            $table->string('electric_system', 150)->nullable();
            $table->string('battery', 150)->nullable();
            $table->string('headlight_type', 150)->nullable();
            $table->string('headlight_blub_type', 150)->nullable();
            $table->string('brake_tail_light', 150)->nullable();
            $table->string('turn_signal', 150)->nullable();
            $table->string('pass_light', 150)->nullable();
            $table->string('additional_features', 150)->nullable();
            $table->string('bangalore', 150)->nullable();
            $table->string('mumbai', 150)->nullable();
            $table->string('delhi', 150)->nullable();
            $table->string('pune', 150)->nullable();
            $table->string('chennai', 150)->nullable();
            $table->string('kolkata', 150)->nullable();
            $table->string('hyderabad', 150)->nullable();
            $table->string('lucknow', 150)->nullable();
            $table->string('about_model', 150)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bikes');
    }
}
