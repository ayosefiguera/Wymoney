<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
 
    
    public function index(){
        return view('categories.index', [
            'categories' => Category::all(),
        ]);
    }

    public function create(Category $category){
        return view('categories.create', ['category' => $category]);
    }

    public function edit(Category $category){
        return view('categories.edit', ['category' => $category]);
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
        ]);

        // TODO change to do from user.
        $category = Category::create([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.edit', ['category' => $category] );
    }

    public function update(Request $request, Category $category){
        
        $request->validate([
            'name' => 'required|unique:categories,name',
            'description' => 'required',
        ]);

        // TODO change to do from user.
        $category->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('categories.edit', ['category' => $category] );
    }

    public function destroy(Category $category){

        $category->delete();
        
        return redirect()->route('categories.index');
    }





}
