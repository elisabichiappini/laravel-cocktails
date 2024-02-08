<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Cocktail;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cocktails.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $cocktail = new Cocktail();
        $cocktail->fill($data);
        $cocktail->save();

        return redirect()->route('cocktails.show', $cocktail->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        return view('cocktails.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        return view('cocktails.edit', compact('cocktail'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cocktail $cocktail)
    {
        $data = $request->all();

        $cocktail->update($data);

        return redirect()->route('cocktails.show', compact('cocktail'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
        $cocktail->delete();

        return redirect()->route('cocktails.index');
    }
}
