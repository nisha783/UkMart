<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchResultController extends Controller
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
        if ($request->has('keyword')) {
            // search Product
            $products = Product::where('name', 'like', '%' . $request->keyword . '%')->get();
            $keyword = $request->keyword;
            return view('search.index', compact('products', 'keyword'));
        } else {
            abort(404);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $keyword)
    {
        return $keyword;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
