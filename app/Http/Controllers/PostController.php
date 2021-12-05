<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts  = Http::get(config('lwg.wp_api_posts'));

        return $posts->json();
        // return $posts->json()[0]['content']['rendered'];
        // return $posts->json()[0]['content']['rendered'];
    }

    public function getWpPosts() {
        $postsReq  = Http::get(config('lwg.wp_api_posts'));

        $posts = $postsReq->json();
        $media1Req = Http::get($posts['0']['_links']['wp:featuredmedia']['0']['href']);
        $media1 = $media1Req->json()['source_url'];
        $media2Req = Http::get($posts['1']['_links']['wp:featuredmedia']['0']['href']);
        $media2 = $media2Req->json()['source_url'];


        $posts['0']['thumb'] = $media1;
        $posts['1']['thumb'] = $media2;
        $postsData = [$posts['0'], $posts['1']];

        return $postsData;
    }

    public function getWpPostsFooter() {
        $postsReq  = Http::get(config('lwg.wp_api_posts'));

        $posts = $postsReq->json();
        $media1Req = Http::get($posts['0']['_links']['wp:featuredmedia']['0']['href']);
        $media1 = $media1Req->json()['source_url'];
        $media2Req = Http::get($posts['1']['_links']['wp:featuredmedia']['0']['href']);
        $media2 = $media2Req->json()['source_url'];
        $media3Req = Http::get($posts['2']['_links']['wp:featuredmedia']['0']['href']);
        $media3 = $media3Req->json()['source_url'];
        $media4Req = Http::get($posts['3']['_links']['wp:featuredmedia']['0']['href']);
        $media4 = $media4Req->json()['source_url'];


        $posts['0']['thumb'] = $media1;
        $posts['1']['thumb'] = $media2;
        $posts['2']['thumb'] = $media3;
        $posts['3']['thumb'] = $media4;
        $postsData = [$posts['0'], $posts['1'], $posts['2'], $posts['3']];

        return $postsData;
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
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
