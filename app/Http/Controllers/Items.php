<?php

namespace App\Http\Controllers;

use App\Models\Shippeditem;
use Illuminate\Http\Request;

class Items extends Controller
{
    public function index()
    {
  $items =  Shippeditem::all();
  return $items;
 
 
    }


 
    public function store(Request $request)
    {
       
      
        $items = new Shippeditem();

        $items->no =  $request->no;


        $items->weight =  $request->weight;
        
        $items->amount =  $request->amount;

        $items->destinations =  $request->destinations;

        $items->dimensions =  $request->dimensions;

        $items->insurance =  $request->insurance;


        $items->final_delivery_date =  $request->final_delivery_date;

        $items->retail_center_uid =  $request->retail_center_uid;


       
        $items->save(); 


    }

    

    public function update(Request $request, $id)
    {
        $items = Shippeditem::findOrFail($id);
        $items->update($request->all());

        return $items;

     

       
    }

          

    public function delete(Request $request, $id)
    {
        
        $items = Shippeditem::findOrFail($id);
        $items->delete();

        $items =  Shippeditem::all();

        return $items;
    }

}
