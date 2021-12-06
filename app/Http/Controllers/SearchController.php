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
        $search = Bike::with('images', 'prices')->where('make', 'like', $query . '%')
            ->orWhere('version_name', 'like', $query . '%')
            ->orwhere('model_name', 'like', $query . '%')
            ->orwhere('series', 'like', $query . '%')
            ->get();

        return $search;
    }
    public function searchByBudget(Request $request, $budget)
    {
        $bikes = Bike::where('model_id', '!=', NULL)->with('prices', 'images')->whereHas('prices', function ($q) use ($budget) {
            if ($budget < 300000) {
                $q->where('onroad_price', '<', $budget);
            } else {
                $q->where('onroad_price', '>', $budget);
            }
        })->select('id', 'version_name', 'make', 'series', 'model_name')->take(20)->get();
        $cities = City::all();
        $brands = Brand::where('site_id', 1)->get();

        return Inertia::render('Search/Results', compact('bikes'));
    }

    public function searchByDisplacement(Request $request, $displacement)
    {
        $bikes = Bike::where('model_id', '!=', NULL)->with('prices', 'images')->take(20)->get();

        $cities = City::all();
        $brands = Brand::where('site_id', 1)->get();

        return Inertia::render('Search/Results', compact('bikes'));
    }
}
