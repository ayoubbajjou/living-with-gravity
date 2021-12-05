<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $query = $request['query'];
        $search = Bike::with('images', 'prices')->where('make', 'like', $query.'%')
                        ->orWhere('version_name', 'like', $query.'%')
                        ->orwhere('model_name', 'like', $query.'%')
                        ->orwhere('series', 'like', $query.'%')
                        ->get();

        return $search;
    }
}
