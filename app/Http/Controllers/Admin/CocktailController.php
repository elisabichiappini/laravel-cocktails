<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCocktailRequest;
use App\Http\Requests\UpdateCocktailRequest;
use App\Models\Cocktail;
use App\Models\Ingredient;
use Illuminate\Http\Request;

class CocktailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cocktails = Cocktail::all();
        return view('admin.cocktails.index', compact('cocktails'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ingredients = Ingredient::all();
        return view('admin.cocktails.create', compact('ingredients'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCocktailRequest $request)
    {


        $data = $request->validated();

        $cocktail = new Cocktail();

        $cocktail->name = $data['name'];
        $cocktail->brand = $data['brand'];
        $cocktail->price = $data['price'];
        $cocktail->is_alcholic = $data['is_alcholic'];
        $cocktail->description = $data['description'];

        $cocktail->save();

        if (isset($data['ingredients'])) {
            $cocktail->ingredients()->sync($data['ingredients']);
        }

        return redirect()->route('admin.cocktails.show', $cocktail->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cocktail $cocktail)
    {
        return view('admin.cocktails.show', compact('cocktail'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cocktail $cocktail)
    {
        $ingredients = Ingredient::all();
        return view('admin.cocktails.edit', compact('cocktail', 'ingredients'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCocktailRequest $request, Cocktail $cocktail)
    {
        $data = $request->validated();

        $cocktail->update($data);

        if (isset($data['ingredients'])) {
            $cocktail->ingredients()->sync($data['ingredients']);
        }

        return redirect()->route('admin.cocktails.show', compact('cocktail'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cocktail $cocktail)
    {
        $cocktail->delete();

        return redirect()->route('admin.cocktails.index');
    }
}
