<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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

        $postsData = [];
        $brands = Brand::limit(10)->get();
        return Inertia::render('Welcome', [
            'canLogin' => Route::has('login'),
            'canRegister' => Route::has('register'),
            'postsData' => $postsData,
            'brands' => $brands
        ]);
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
