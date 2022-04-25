<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Brand;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CompareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series = Bike::select('series')->whereNotNull('model_id')->pluck('series');
        $series = array_values(collect($series)->unique()->toArray());

        return Inertia::render('Compare/index', compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function compareBikes(Request $request)
    {
        $data = [];

        foreach ($request->all() as $key => $value) {
            $bike = Bike::where('version_name', $value['variant'])->where(function ($q) use ($value) {
                $q->where('make', $value['brand'])->orWhere('series', $value['brand']);
            })->with(['images', 'prices', 'specifications', 'brand'])->first();
            if ($bike) {
                array_push($data, $bike);
            }
        }

        return $data;
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
