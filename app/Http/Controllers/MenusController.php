<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Food;
use Illuminate\Http\Request;

class MenusController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('menus.index', [
            'foods' => $foods,
        ]);
    }

    public function create()
    {
        $categories = Category::all();
        return view('menus.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|integer',
            'description' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $generatedImageName = 'image' . '-' .
            $request->name . '.' .
            $request->image->extension();

        $request->image->move(public_path('images'), $generatedImageName);

        $foods = Food::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'img_path' => $generatedImageName,
        ]);

        $foods->save();
        return redirect('/menus');
    }

    public function show($id)
    {
        $foods = Food::find($id);
        return view('menus.show', [
            'foods' => $foods,
        ]);
    }
}
