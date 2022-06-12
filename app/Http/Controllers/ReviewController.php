<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminPanel()
    {
        $reviews = Review::with('user', 'bike')->paginate(20);
        return Inertia::render('ReviewsAdmin/index', compact('reviews'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function allReviews(Request $request, $brand, $series, $version_name)
    {
        $reviews = [];
        $unslug = ucwords(str_replace('-', ' ', $series));
        $bike = Bike::where('make', $brand)->where('series', $unslug)->where('version_name', $version_name)->first();
        if($bike) {
            $reviews = Review::where('bike_id', $bike->id)->where('approved', 1)->with('user')->get();
            foreach ($reviews as $key => $value) {
                $arr = array_filter([$value->mileage_rate, $value->mileage_rate, $value->safety_rate, $value->pricing_rate, $value->performace_rate, $value->design_rate]);
                $count = count($arr) > 0 ? count($arr) : 1;
                $value['avg'] = array_sum($arr) / $count;
            }
        }

        return Inertia::render('Reviews/All', compact('reviews'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function fetchReviews(Request $request)
    {
        return Review::where('user_id', auth()->user()->id)->get();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($brand, $series, $version_name)
    {
        $bike = Bike::where('make', $brand)->where('version_name', $version_name)->with('images')->first();

        return Inertia::render('Reviews/WriteReview', compact('bike'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        Review::create([
            'bike_id' => $id,
            'user_id' => auth()->id(),
            'mileage_rate' => $request->mileageRate,
            'safety_rate' => $request->safetyRate,
            'pricing_rate' => $request->pricingRate,
            'performance_rate' => $request->performanceRate,
            'design_rate' => $request->designRate,
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'description' => $request->description,
        ]);

    }

    /**
     * Approve review.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function approve(Request $request)
    {
        $review = Review::findOrFail($request->review_id);
        $review->update([
            'approved' => true
        ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function review(Request $request, $brand, $series, $version_name, $slug)
    {
        $bike = Bike::where('make', $brand)->where('version_name', $version_name)->with('images')->first();

        $review = Review::where('bike_id', $bike->id)->where('slug', $slug)->where('approved', true)->with('user')->first();
        return Inertia::render('Reviews/ShowReview', compact('review'));
    }

    /**
     * write review.
     *
     */
    public function writeReview(Request $request)
    {
        $series = Bike::select('series')->whereNotNull('model_id')->pluck('series');
        $series = array_values(collect($series)->unique()->toArray());

        return Inertia::render('Reviews/WriteGuestReview', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Review $review)
    {
        //
    }
}
