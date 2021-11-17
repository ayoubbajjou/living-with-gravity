<template>
    <app-layout title="Create Bike">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Create new bike
            </h2>
        </template>
        
        <div class="py-12 px-12">
            <div class="mt-10 sm:mt-0">
                <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Bike Information</h3>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div v-if="page === 1" class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="url" class="block text-sm font-medium text-gray-700">Url</label>
                                    <input type="text" v-model="form.url" id="url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="make" class="block text-sm font-medium text-gray-700">Make</label>
                                    <input type="text" v-model="form.make" id="make" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="series" class="block text-sm font-medium text-gray-700">Series</label>
                                    <input type="text" v-model="form.series" id="series" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="version" class="block text-sm font-medium text-gray-700">Version</label>
                                    <input type="text" v-model="form.version" id="version" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ex_showroom_price_mumb" class="block text-sm font-medium text-gray-700">Ex Showroom Price Mumbai</label>
                                    <input type="text" v-model="form.ex_showroom_price_mumb" id="ex_showroom_price_mumb" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="image_url" class="block text-sm font-medium text-gray-700">Image Url</label>
                                    <input type="text" v-model="form.image_url" id="image_url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="colors_name" class="block text-sm font-medium text-gray-700">Colors name</label>
                                    <input type="text" v-model="form.colors_name" id="colors_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="colors_rgb" class="block text-sm font-medium text-gray-700">Colors GRB</label>
                                    <input type="text" v-model="form.colors_rgb" id="colors_rgb" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fuel_type" class="block text-sm font-medium text-gray-700">Fuel type</label>
                                    <input type="text" v-model="form.fuel_type" id="fuel_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="max_power" class="block text-sm font-medium text-gray-700">Max power</label>
                                    <input type="text" v-model="form.max_power" id="max_power" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="rated_power" class="block text-sm font-medium text-gray-700">Rated power</label>
                                    <input type="text" v-model="form.rated_power" id="rated_power" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="max_troque" class="block text-sm font-medium text-gray-700">Max troque</label>
                                    <input type="text" v-model="form.max_troque" id="max_troque" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="emission_standard" class="block text-sm font-medium text-gray-700">Emission standard</label>
                                    <input type="text" v-model="form.emission_standard" id="emission_standard" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="displacement" class="block text-sm font-medium text-gray-700">Displacement</label>
                                    <input type="text" v-model="form.displacement" id="displacement" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="bore" class="block text-sm font-medium text-gray-700">Bore</label>
                                    <input type="text" v-model="form.bore" id="bore" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                        </div>

                        <div v-if="page === 2" class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="stroke" class="block text-sm font-medium text-gray-700">Stroke</label>
                                    <input type="text" v-model="form.stroke" id="stroke" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="valve_per_cylinder" class="block text-sm font-medium text-gray-700">Valve per cylinder</label>
                                    <input type="text" v-model="form.valve_per_cylinder" id="valve_per_cylinder" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="compression_ratio" class="block text-sm font-medium text-gray-700">Compression ratio</label>
                                    <input type="text" v-model="form.compression_ratio" id="compression_ratio" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ignition" class="block text-sm font-medium text-gray-700">Ignition</label>
                                    <input type="text" v-model="form.ignition" id="ignition" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="spark_plugs" class="block text-sm font-medium text-gray-700">Spark plugs</label>
                                    <input type="text" v-model="form.spark_plugs" id="spark_plugs" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="cooling_system" class="block text-sm font-medium text-gray-700">Cooling system</label>
                                    <input type="text" v-model="form.cooling_system" id="cooling_system" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="transmission" class="block text-sm font-medium text-gray-700">Transmission</label>
                                    <input type="text" v-model="form.transmission" id="transmission" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="transmission_type" class="block text-sm font-medium text-gray-700">Transmission type</label>
                                    <input type="text" v-model="form.transmission_type" id="transmission_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="clutch" class="block text-sm font-medium text-gray-700">Clutch</label>
                                    <input type="text" v-model="form.clutch" id="clutch" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fuel_delivery_system" class="block text-sm font-medium text-gray-700">Fuel delivery system</label>
                                    <input type="text" v-model="form.fuel_delivery_system" id="fuel_delivery_system" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fuel_tank_capacity" class="block text-sm font-medium text-gray-700">Fuel tank capacity</label>
                                    <input type="text" v-model="form.fuel_tank_capacity" id="fuel_tank_capacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="reserve_fuel_capacity" class="block text-sm font-medium text-gray-700">Reserve tank capacity</label>
                                    <input type="text" v-model="form.reserve_fuel_capacity" id="reserve_fuel_capacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="riding_range" class="block text-sm font-medium text-gray-700">Riding range</label>
                                    <input type="text" v-model="form.riding_range" id="riding_range" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="mileage_arai" class="block text-sm font-medium text-gray-700">Mileage arai</label>
                                    <input type="text" v-model="form.mileage_arai" id="mileage_arai" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="mileage_owner_reported" class="block text-sm font-medium text-gray-700">Mileage owner reported</label>
                                    <input type="text" v-model="form.mileage_owner_reported" id="mileage_owner_reported" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="top_speed" class="block text-sm font-medium text-gray-700">Top speed</label>
                                    <input type="text" v-model="form.top_speed" id="top_speed" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                        </div>

                        <div v-if="page === 3" class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="battery_charging_time" class="block text-sm font-medium text-gray-700">Battery charging time</label>
                                    <input type="text" v-model="form.battery_charging_time" id="battery_charging_time" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="carrying_capacity" class="block text-sm font-medium text-gray-700">Carrying capacity</label>
                                    <input type="text" v-model="form.carrying_capacity" id="carrying_capacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="battery_capacity" class="block text-sm font-medium text-gray-700">Battery capacity</label>
                                    <input type="text" v-model="form.battery_capacity" id="battery_capacity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="battery_type" class="block text-sm font-medium text-gray-700">Battery type</label>
                                    <input type="text" v-model="form.battery_type" id="battery_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="motor_type" class="block text-sm font-medium text-gray-700">Motor type</label>
                                    <input type="text" v-model="form.motor_type" id="motor_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="charger_output" class="block text-sm font-medium text-gray-700">Charger output</label>
                                    <input type="text" v-model="form.charger_output" id="charger_output" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="braking_system" class="block text-sm font-medium text-gray-700">Braking system</label>
                                    <input type="text" v-model="form.braking_system" id="braking_system" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="front_brake_type" class="block text-sm font-medium text-gray-700">Front brake type</label>
                                    <input type="text" v-model="form.front_brake_type" id="front_brake_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="calliper_type" class="block text-sm font-medium text-gray-700">Calliper type</label>
                                    <input type="text" v-model="form.calliper_type" id="calliper_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="front_wheel_size" class="block text-sm font-medium text-gray-700">Front wheel size</label>
                                    <input type="text" v-model="form.front_wheel_size" id="front_wheel_size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="rear_wheel_size" class="block text-sm font-medium text-gray-700">Rear wheel size</label>
                                    <input type="text" v-model="form.rear_wheel_size" id="rear_wheel_size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="front_tyre_size" class="block text-sm font-medium text-gray-700">Front tyre size</label>
                                    <input type="text" v-model="form.front_tyre_size" id="front_tyre_size" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tyre_type" class="block text-sm font-medium text-gray-700">Tyre type</label>
                                    <input type="text" v-model="form.tyre_type" id="tyre_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="radials_tyre" class="block text-sm font-medium text-gray-700">Radials tyre</label>
                                    <input type="text" v-model="form.radials_tyre" id="radials_tyre" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="wheel_type" class="block text-sm font-medium text-gray-700">Wheel type</label>
                                    <input type="text" v-model="form.wheel_type" id="wheel_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="front_suspension" class="block text-sm font-medium text-gray-700">Front suspension</label>
                                    <input type="text" v-model="form.front_suspension" id="front_suspension" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                        </div>

                        <div v-if="page === 4" class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="rear_suspension" class="block text-sm font-medium text-gray-700">Rear suspension</label>
                                    <input type="text" v-model="form.rear_suspension" id="rear_suspension" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="kerb_weight" class="block text-sm font-medium text-gray-700">Kerb weight</label>
                                    <input type="text" v-model="form.kerb_weight" id="kerb_weight" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="overall_length" class="block text-sm font-medium text-gray-700">Overall length</label>
                                    <input type="text" v-model="form.overall_length" id="overall_length" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="overall_width" class="block text-sm font-medium text-gray-700">Overall width</label>
                                    <input type="text" v-model="form.overall_width" id="overall_width" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="overall_height" class="block text-sm font-medium text-gray-700">Overall height</label>
                                    <input type="text" v-model="form.overall_height" id="overall_height" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="wheel_base" class="block text-sm font-medium text-gray-700">Wheel base</label>
                                    <input type="text" v-model="form.wheel_base" id="wheel_base" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="ground_clear_ance" class="block text-sm font-medium text-gray-700">Ground clear ance</label>
                                    <input type="text" v-model="form.ground_clear_ance" id="ground_clear_ance" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="seat_height" class="block text-sm font-medium text-gray-700">Seat height</label>
                                    <input type="text" v-model="form.seat_height" id="seat_height" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="chassis_type" class="block text-sm font-medium text-gray-700">Chassis type</label>
                                    <input type="text" v-model="form.chassis_type" id="chassis_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="battery_warranty" class="block text-sm font-medium text-gray-700">Battery warranty</label>
                                    <input type="text" v-model="form.battery_warranty" id="battery_warranty" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="motor_warranty" class="block text-sm font-medium text-gray-700">Motor warranty</label>
                                    <input type="text" v-model="form.motor_warranty" id="motor_warranty" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="odometer" class="block text-sm font-medium text-gray-700">Odometer</label>
                                    <input type="text" v-model="form.odometer" id="odometer" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="drls" class="block text-sm font-medium text-gray-700">Drls</label>
                                    <input type="text" v-model="form.drls" id="drls" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="mobile_app_connectivity" class="block text-sm font-medium text-gray-700">Mobile app connectivity</label>
                                    <input type="text" v-model="form.mobile_app_connectivity" id="mobile_app_connectivity" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="gps_navigation" class="block text-sm font-medium text-gray-700">GPS navigation</label>
                                    <input type="text" v-model="form.gps_navigation" id="gps_navigation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="front_storage_box" class="block text-sm font-medium text-gray-700">Front storage box</label>
                                    <input type="text" v-model="form.front_storage_box" id="front_storage_box" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                        </div>
                        <div v-if="page === 5" class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="under_seat_storage" class="block text-sm font-medium text-gray-700">Under seat storage</label>
                                    <input type="text" v-model="form.under_seat_storage" id="under_seat_storage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="aho" class="block text-sm font-medium text-gray-700">AHO</label>
                                    <input type="text" v-model="form.aho" id="aho" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="speed_ometer" class="block text-sm font-medium text-gray-700">Speed ometer</label>
                                    <input type="text" v-model="form.speed_ometer" id="speed_ometer" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="fuel_guage" class="block text-sm font-medium text-gray-700">Fuel guage</label>
                                    <input type="text" v-model="form.fuel_guage" id="fuel_guage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="tacho_ometer" class="block text-sm font-medium text-gray-700">Tacho ometer</label>
                                    <input type="text" v-model="form.tacho_ometer" id="tacho_ometer" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="stand_alarm" class="block text-sm font-medium text-gray-700">Stand alarm</label>
                                    <input type="text" v-model="form.stand_alarm" id="stand_alarm" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="stepped_seat" class="block text-sm font-medium text-gray-700">Stepped seat</label>
                                    <input type="text" v-model="form.stepped_seat" id="stepped_seat" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="num_tripmeters" class="block text-sm font-medium text-gray-700">Num tripmeters</label>
                                    <input type="text" v-model="form.num_tripmeters" id="num_tripmeters" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="low_fuel_indicator" class="block text-sm font-medium text-gray-700">Low fuel indicator</label>
                                    <input type="text" v-model="form.low_fuel_indicator" id="low_fuel_indicator" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="low_oil_indicator" class="block text-sm font-medium text-gray-700">Low oil indicator</label>
                                    <input type="text" v-model="form.low_oil_indicator" id="low_oil_indicator" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="low_battery_indicator" class="block text-sm font-medium text-gray-700">Low battery indicator</label>
                                    <input type="text" v-model="form.low_battery_indicator" id="low_battery_indicator" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pillion_backrest" class="block text-sm font-medium text-gray-700">Pillion backrest</label>
                                    <input type="text" v-model="form.pillion_backrest" id="pillion_backrest" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pillion_grabrail" class="block text-sm font-medium text-gray-700">Pillion grabrail</label>
                                    <input type="text" v-model="form.pillion_grabrail" id="pillion_grabrail" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pillion_seat" class="block text-sm font-medium text-gray-700">Pillion seat</label>
                                    <input type="text" v-model="form.pillion_seat" id="pillion_seat" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pillion_footrest" class="block text-sm font-medium text-gray-700">Pillion footrest</label>
                                    <input type="text" v-model="form.pillion_footrest" id="pillion_footrest" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="digital_fuel_guage" class="block text-sm font-medium text-gray-700">Digital fuel guage</label>
                                    <input type="text" v-model="form.digital_fuel_guage" id="digital_fuel_guage" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                        </div>
                        <div v-if="page === 6" class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="start_type" class="block text-sm font-medium text-gray-700">Start type</label>
                                    <input type="text" v-model="form.start_type" id="start_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="shift_light" class="block text-sm font-medium text-gray-700">Shift light</label>
                                    <input type="text" v-model="form.shift_light" id="shift_light" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="antilock_braking_system" class="block text-sm font-medium text-gray-700">Antilock braking system</label>
                                    <input type="text" v-model="form.antilock_braking_system" id="antilock_braking_system" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="killswitch" class="block text-sm font-medium text-gray-700">Killswitch</label>
                                    <input type="text" v-model="form.killswitch" id="killswitch" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="clock" class="block text-sm font-medium text-gray-700">Clock</label>
                                    <input type="text" v-model="form.clock" id="clock" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="electric_system" class="block text-sm font-medium text-gray-700">Electric system</label>
                                    <input type="text" v-model="form.electric_system" id="electric_system" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="battery" class="block text-sm font-medium text-gray-700">Battery</label>
                                    <input type="text" v-model="form.battery" id="battery" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="headlight_type" class="block text-sm font-medium text-gray-700">Headlight type</label>
                                    <input type="text" v-model="form.headlight_type" id="headlight_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="headlight_blub_type" class="block text-sm font-medium text-gray-700">Headlight blub type</label>
                                    <input type="text" v-model="form.headlight_blub_type" id="headlight_blub_type" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="brake_tail_light" class="block text-sm font-medium text-gray-700">Brake tail light</label>
                                    <input type="text" v-model="form.brake_tail_light" id="brake_tail_light" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="turn_signal" class="block text-sm font-medium text-gray-700">Turn signal</label>
                                    <input type="text" v-model="form.turn_signal" id="turn_signal" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="pass_light" class="block text-sm font-medium text-gray-700">Pass light</label>
                                    <input type="text" v-model="form.pass_light" id="pass_light" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="additional_features" class="block text-sm font-medium text-gray-700">Additional features</label>
                                    <input type="text" v-model="form.additional_features" id="additional_features" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                                    <input type="text" v-model="form.city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="about_model" class="block text-sm font-medium text-gray-700">About model</label>
                                    <input type="text" v-model="form.about_model" id="about_model" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" />
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <span v-if="page <= 5" @click="nextPage" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 cursor-pointer">
                                Next
                            </span>
                            <button v-else @click="insertData" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout.vue'

    export default {
        components: {
            AppLayout,
        },
        data() {
            return {
                page: 1,
                form: {
                    url: null,
                    make: null,
                    series: null,
                    version: null,
                    ex_showroom_price_mumb: null,
                    image_url: null,
                    colors_name: null,
                    colors_rgb: null,
                    fuel_type: null,
                    max_power: null,
                    rated_power: null,
                    max_troque: null,
                    emission_standard: null,
                    displacement: null,
                    bore: null,
                    stroke: null,
                    valve_per_cylinder: null,
                    compression_ratio: null,
                    ignition: null,
                    spark_plugs: null,
                    cooling_system: null,
                    transmission: null,
                    transmission_type: null,
                    clutch: null,
                    fuel_delivery_system: null,
                    fuel_tank_capacity: null,
                    reserve_fuel_capacity: null,
                    riding_range: null,
                    mileage_arai: null,
                    mileage_owner_reported: null,
                    top_speed: null,
                    battery_charging_time: null,
                    carrying_capacity: null,
                    battery_capacity: null,
                    battery_type: null,
                    motor_type: null,
                    charger_output: null,
                    braking_system: null,
                    front_brake_type: null,
                    calliper_type: null,
                    front_wheel_size: null,
                    rear_wheel_size: null,
                    front_tyre_size: null,
                    tyre_type: null,
                    radials_tyre: null,
                    wheel_type: null,
                    front_suspension: null,
                    rear_suspension: null,
                    kerb_weight: null,
                    overall_length: null,
                    overall_width: null,
                    overall_height: null,
                    wheel_base: null,
                    ground_clear_ance: null,
                    seat_height: null,
                    chassis_type: null,
                    battery_warranty: null,
                    motor_warranty: null,
                    odometer: null,
                    drls: null,
                    mobile_app_connectivity: null,
                    gps_navigation: null,
                    front_storage_box: null,
                    under_seat_storage: null,
                    aho: null,
                    speed_ometer: null,
                    fuel_guage: null,
                    tacho_ometer: null,
                    stand_alarm: null,
                    stepped_seat: null,
                    num_tripmeters: null,
                    low_fuel_indicator: null,
                    low_oil_indicator: null,
                    low_battery_indicator: null,
                    pillion_backrest: null,
                    pillion_grabrail: null,
                    pillion_seat: null,
                    pillion_footrest: null,
                    digital_fuel_guage: null,
                    start_type: null,
                    shift_light: null,
                    antilock_braking_system: null,
                    killswitch: null,
                    clock: null,
                    electric_system: null,
                    battery: null,
                    headlight_type: null,
                    headlight_blub_type: null,
                    brake_tail_light: null,
                    turn_signal: null,
                    pass_light: null,
                    additional_features: null,
                    city: null,
                    about_model: null,
                }
            }
        },

        methods: {
            nextPage() {
                this.page++;
            },
            insertData() {
                console.log(this.form)
                axios.post('/store-bike', {
                    data: this.form
                })
                .then(res => {
                    console.log(res)
                    this.form = {
                                    url: null,
                                    make: null,
                                    series: null,
                                    version: null,
                                    ex_showroom_price_mumb: null,
                                    image_url: null,
                                    colors_name: null,
                                    colors_rgb: null,
                                    fuel_type: null,
                                    max_power: null,
                                    rated_power: null,
                                    max_troque: null,
                                    emission_standard: null,
                                    displacement: null,
                                    bore: null,
                                    stroke: null,
                                    valve_per_cylinder: null,
                                    compression_ratio: null,
                                    ignition: null,
                                    spark_plugs: null,
                                    cooling_system: null,
                                    transmission: null,
                                    transmission_type: null,
                                    clutch: null,
                                    fuel_delivery_system: null,
                                    fuel_tank_capacity: null,
                                    reserve_fuel_capacity: null,
                                    riding_range: null,
                                    mileage_arai: null,
                                    mileage_owner_reported: null,
                                    top_speed: null,
                                    battery_charging_time: null,
                                    carrying_capacity: null,
                                    battery_capacity: null,
                                    battery_type: null,
                                    motor_type: null,
                                    charger_output: null,
                                    braking_system: null,
                                    front_brake_type: null,
                                    calliper_type: null,
                                    front_wheel_size: null,
                                    rear_wheel_size: null,
                                    front_tyre_size: null,
                                    tyre_type: null,
                                    radials_tyre: null,
                                    wheel_type: null,
                                    front_suspension: null,
                                    rear_suspension: null,
                                    kerb_weight: null,
                                    overall_length: null,
                                    overall_width: null,
                                    overall_height: null,
                                    wheel_base: null,
                                    ground_clear_ance: null,
                                    seat_height: null,
                                    chassis_type: null,
                                    battery_warranty: null,
                                    motor_warranty: null,
                                    odometer: null,
                                    drls: null,
                                    mobile_app_connectivity: null,
                                    gps_navigation: null,
                                    front_storage_box: null,
                                    under_seat_storage: null,
                                    aho: null,
                                    speed_ometer: null,
                                    fuel_guage: null,
                                    tacho_ometer: null,
                                    stand_alarm: null,
                                    stepped_seat: null,
                                    num_tripmeters: null,
                                    low_fuel_indicator: null,
                                    low_oil_indicator: null,
                                    low_battery_indicator: null,
                                    pillion_backrest: null,
                                    pillion_grabrail: null,
                                    pillion_seat: null,
                                    pillion_footrest: null,
                                    digital_fuel_guage: null,
                                    start_type: null,
                                    shift_light: null,
                                    antilock_braking_system: null,
                                    killswitch: null,
                                    clock: null,
                                    electric_system: null,
                                    battery: null,
                                    headlight_type: null,
                                    headlight_blub_type: null,
                                    brake_tail_light: null,
                                    turn_signal: null,
                                    pass_light: null,
                                    additional_features: null,
                                    city: null,
                                    about_model: null,
                                }
                })
                .catch(err => {
                    console.log(err)
                })
            }
        }
    }
</script>
