<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();

        return view('category', compact('categories'));
    }

    public function store(CategoryRequest $request){
        $category = $request->only(['name']);
        Category::create($category);

        return redirect('/categories')->with('message','カテゴリを作成しました');
    }
}
