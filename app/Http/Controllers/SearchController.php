<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Brand;
use App\Models\City;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request['query'];
        $search = Bike::whereNotNull('default_price')
            ->with('images', 'prices')
            ->where('make', 'like', $query . '%')
            ->where(function ($q) use ($query) {
                $q->Where('version_name', 'like', $query . '%')
                ->orwhere('model_name', 'like', $query . '%')
                ->orwhere('series', 'like', $query . '%');
            })
            ->orderByDesc('default_price')
            ->get();

        return $search;
    }
    public function searchByBudget(Request $request, $budget)
    {
        $bikes = Bike::whereNotNull('model_id')
                        ->whereNotNull('default_price')
                        ->with('prices', 'images');

        if ($budget <= 300000) {
            $bikes->where('default_price', '<', $budget);
        } else {
            $bikes->where('default_price', '>', $budget);
        }
        
        $bikes = $bikes->select('id', 'version_name', 'make', 'series', 'model_name', 'default_price')
                ->take(50)
                ->orderByDesc('default_price')
                ->get();
        $cities = City::all();
        $brands = Brand::where('site_id', 1)->get();

        return Inertia::render('Search/Results', compact('bikes'));
    }

    public function searchByDisplacement(Request $request, $displacement)
    {
        $bikes = Bike::where('model_id', '!=', NULL)
                    ->whereNotNull('default_price')
                    ->with('prices', 'images')
                    ->take(20)
                    ->get();

        $cities = City::all();
        $brands = Brand::where('site_id', 1)->get();

        return Inertia::render('Search/Results', compact('bikes'));
    }
}
