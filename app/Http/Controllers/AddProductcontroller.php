<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Carbon\Carbon;

class AddProductcontroller extends Controller
{
    public function Add()
    {
    	return view('Products.add');
    }

    public function Store(Request $request)
    {



    	$product = new Product;
    	$product->name = $request->name;
    	$product->price = $request->price;
    	//$dateinput = $request->End_date ;

    	//$dt = \Carbon\Carbon::create($dateinput[0], $dateinput[1], $dateinput[2], 0, 0, 0);
    	//$dd=$dt->day ;
		//echo $dt->format('Y-m-d') . "\n";

    	//$tempdate = strtotime($datestring);
    	//$product->End_date = $dateinput ;

    	$product->End_date = $request->End_date ;
    	$product->category_id = $request->category_id;
    	$product->Phone_Number = $request->Phone_Number;
    	$product->quantity = $request->quantity;
    	//$product->quantity = date_format($date, 'd');
    	//$product->quantity = $request->quantity;

    	$product->save();

    	return back();
    }
}
