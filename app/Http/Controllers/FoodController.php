<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\ReviewRating;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::get();
        // $avg = ReviewRating::where('food_id', $foods[0]->id)->get();
        // $avg->avg('star_rating');
        return view('foods.index', compact('foods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required',
            'image' => 'required|file',
            'rating_star' => 'required',
            'description' => 'required',
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('post-image');
        }

        Food::create($validateData);

        return redirect()->route('food.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        $post_detail = Food::with('ReviewDatas')->find($food->id);
        return view('foods.show', compact('food', 'post_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        $food->delete();
        return redirect()->route('food.index');
    }

    public function reviewstore(Request $request, Food $food)
    {
        $request->validate(['comment' => 'required']);
        $comment = Comment::create([
            'user_id' => Auth::user()->id,
            'food_id' => $food->id,
            'content' => $request->comment,
        ]);
        $review = new ReviewRating();
        $review->comment_id = $comment->id;
        $review->food_id = $request->food_id;
        $review->user_id = Auth::user()->id;
        $review->star_rating = $request->rating;
        $review->save();
        return redirect()->back();
    }
}
