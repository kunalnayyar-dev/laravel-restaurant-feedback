<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Reviews;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
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
        // $review = new Reviews;
        // $review->customer_email = request('customer_email');
        // $review->customer_name = request('customer_name');
        // $review->review_text = request('review_text');
        // $review->save();

        $validatedData = $request->validate([
            'customer_email' => 'required|email',
            'customer_name' => 'required',
            'review_text' => 'required',
        ]);

        Reviews::create($request->all());

        return redirect('/')->with('message', 'Your review has been submitted!');;
    }
}
