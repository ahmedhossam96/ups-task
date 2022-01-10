<?php

namespace App\Http\Controllers;

use App\Models\Retailcenter;
use Illuminate\Http\Request;

class Retail extends Controller
{
    public function index()
    {
  $retail =  Retailcenter::all();
  return $retail;
 
 
    }


 
    public function store(Request $request)
    {
       
      
        $retail = new Retailcenter();
        $retail->address =  $request->address;
        
        $retail->type =  $request->type;
        $retail->save(); 


    }

    

    public function update(Request $request, $id)
    {
        $retail = Retailcenter::findOrFail($id);
        $retail->update($request->all());

        return $retail;

     

       
    }

          

    public function delete(Request $request, $id)
    {
        
        $item = Item::findOrFail($id);
        $item->delete();

        $retail =  Retailcenter::all();

        return $retail;
    }



        
}
