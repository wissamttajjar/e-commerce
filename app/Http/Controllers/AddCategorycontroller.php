<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class AddCategorycontroller extends Controller
{
    public function Add()
    {
    	return view('Categories.add');
    }

    public function Store(Request $request)
    {
    	$category = new Category;
    	$category->name = $request->name;
    	$category->save();

    	return back();
    }
}
