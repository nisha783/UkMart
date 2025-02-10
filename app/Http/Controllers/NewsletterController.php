<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
   
public function store(Request $request)
{
    // Validate the email
    $request->validate([
        'email' => 'required|email|unique:newsletters,email', // Make sure email is unique
    ]);

    // Save the email to the newsletters table
    Newsletter::create([
        'email' => $request->input('email'),  // Save the email
    ]);

    // Redirect with a success message (optional)
    return redirect()->back()->with('success', 'Thank you for subscribing!');
}

    /**
     * Display the specified resource.
     */
    public function show(Newsletter $newsletter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Newsletter $newsletter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Newsletter $newsletter)
    {
        //
    }
}
