<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('brand')->insert(
            [
                'id' => 1,
                'brand_name' => 'TVS',
                'url' => 'https://www.bikewale.com/tvs-bikes/',
                'price_sync' => 1,
                'brand_logo' => 'TVS.svg'
            ]
        );
        DB::table('brand')->insert([
            'id' => 2,
            'brand_name' => 'Hero',
            'url' => 'https://www.bikewale.com/hero-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Hero.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 3,
            'brand_name' => 'Yamaha',
            'url' => 'https://www.bikewale.com/yamaha-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Yamaha.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 4,
            'brand_name' => 'Royal Enfield',
            'url' => 'https://www.bikewale.com/royalenfield-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Royal Enfield.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 5,
            'brand_name' => 'Honda',
            'url' => 'https://www.bikewale.com/honda-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Honda.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 6,
            'brand_name' => 'Bajaj',
            'url' => 'https://www.bikewale.com/bajaj-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Bajaj.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 7,
            'brand_name' => 'Suzuki',
            'url' => 'https://www.bikewale.com/suzuki-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Suzuki.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 8,
            'brand_name' => 'KTM',
            'url' => 'https://www.bikewale.com/ktm-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'KTM.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 9,
            'brand_name' => 'Hero Electric',
            'url' => 'https://www.bikewale.com/heroelectric-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Hero Electric.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 10,
            'brand_name' => 'Jawa',
            'url' => 'https://www.bikewale.com/jawa-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Jawa.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 11,
            'brand_name' => '22Kymco',
            'url' => 'https://www.bikewale.com/22kymco-bikes/',
            'price_sync' => 1,
            'brand_logo' => '22Kymco.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 12,
            'brand_name' => 'Ampere',
            'url' => 'https://www.bikewale.com/ampere-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Ampere.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 13,
            'brand_name' => 'Aprilia',
            'url' => 'https://www.bikewale.com/aprilia-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Aprilia.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 14,
            'brand_name' => 'Ather',
            'url' => 'https://www.bikewale.com/ather-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Ather.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 15,
            'brand_name' => 'Benelli',
            'url' => 'https://www.bikewale.com/benelli-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Benelli.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 16,
            'brand_name' => 'Benling',
            'url' => 'https://www.bikewale.com/benling-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Benling.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 17,
            'brand_name' => 'BGauss',
            'url' => 'https://www.bikewale.com/bgauss-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'BGauss.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 18,
            'brand_name' => 'BMW',
            'url' => 'https://www.bikewale.com/bmw-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'BMW.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 19,
            'brand_name' => 'CFMoto',
            'url' => 'https://www.bikewale.com/cfmoto-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'CFMoto.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 20,
            'brand_name' => 'Ducati',
            'url' => 'https://www.bikewale.com/ducati-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Ducati.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 21,
            'brand_name' => 'EeVe',
            'url' => 'https://www.bikewale.com/Eeve-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'EeVe.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 22,
            'brand_name' => 'Emflux Motors',
            'url' => 'https://www.bikewale.com/Emfluxmotors-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Emflux Motors.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 23,
            'brand_name' => 'Evolet',
            'url' => 'https://www.bikewale.com/Evolet-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Evolet.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 24,
            'brand_name' => 'Gemopai',
            'url' => 'https://www.bikewale.com/Gemopai-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Gemopai.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 25,
            'brand_name' => 'Harley-Davidson',
            'url' => 'https://www.bikewale.com/Harleydavidson-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Harley-Davidson.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 26,
            'brand_name' => 'Husqvarna',
            'url' => 'https://www.bikewale.com/Husqvarna-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Husqvarna.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 27,
            'brand_name' => 'Indian',
            'url' => 'https://www.bikewale.com/Indian-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Indian Motorcycle.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 28,
            'brand_name' => 'Joy e-bike',
            'url' => 'https://www.bikewale.com/Joybike-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Joy e-bike.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 29,
            'brand_name' => 'Kawasaki',
            'url' => 'https://www.bikewale.com/kawasaki-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Kawasaki.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 30,
            'brand_name' => 'Lambretta',
            'url' => 'https://www.bikewale.com/lambretta-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Lambretta.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 31,
            'brand_name' => 'Lectro',
            'url' => 'https://www.bikewale.com/lectro-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Lectro.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 32,
            'brand_name' => 'Mahindra',
            'url' => 'https://www.bikewale.com/mahindra-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Mahindra.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 33,
            'brand_name' => 'Moto Guzzi',
            'url' => 'https://www.bikewale.com/motoguzzi-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Moto Guzzi.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 34,
            'brand_name' => 'MV Agusta',
            'url' => 'https://www.bikewale.com/mvagusta-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'MV Agusta.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 35,
            'brand_name' => 'Norton',
            'url' => 'https://www.bikewale.com/Norton-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Norton.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 36,
            'brand_name' => 'Odysse',
            'url' => 'https://www.bikewale.com/Odysse-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Odysse.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 37,
            'brand_name' => 'Okinawa',
            'url' => 'https://www.bikewale.com/Okinawa-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Okinawa.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 38,
            'brand_name' => 'OLA',
            'url' => 'https://www.bikewale.com/ola-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'OLA.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 39,
            'brand_name' => 'PURE EV',
            'url' => 'https://www.bikewale.com/pureev-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'PURE EV.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 40,
            'brand_name' => 'Revolt',
            'url' => 'https://www.bikewale.com/Revolt-bikes/',
            'price_sync' => 1,
            'brand_logo' => 'Revolt.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 41,
            'brand_name' => 'Simple Energy',
            'url' => 'https://www.bikewale.com/SimpleEnergy-bikes/',
            'price_sync' => 0,
            'brand_logo' => 'Simple Energy.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 42,
            'brand_name' => 'Techo Electra',
            'url' => 'https://www.bikewale.com/techoelectra-bikes/',
            'price_sync' => 0,
            'brand_logo' => 'Techo Electra.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 43,
            'brand_name' => 'Tork',
            'url' => 'https://www.bikewale.com/Tork-bikes/',
            'price_sync' => 0,
            'brand_logo' => 'Tork.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 44,
            'brand_name' => 'Triumph',
            'url' => 'https://www.bikewale.com/Triumph-bikes/',
            'price_sync' => 0,
            'brand_logo' => 'Triumph.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 45,
            'brand_name' => 'Vespa',
            'url' => 'https://www.bikewale.com/Vespa-bikes/',
            'price_sync' => 0,
            'brand_logo' => 'Vespa.svg'
        ]);
        DB::table('brand')->insert([
            'id' => 46,
            'brand_name' => 'Yezdi',
            'url' => 'https://www.bikewale.com/yezdi-bikes/',
            'price_sync' => 0,
            'brand_logo' => 'Yezdi.svg'
        ]);
        DB::table('brand')->insert(
            [
                'id' => 47,
                'brand_name' => 'Yo',
                'url' => 'https://www.bikewale.com/yo-bikes/',
                'price_sync' => 0,
                'brand_logo' => 'Yo.svg'
            ]
        );
    }
}
