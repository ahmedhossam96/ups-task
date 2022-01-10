<?php

namespace App\Http\Controllers;

use App\Models\Transportation as ModelsTransportation;
use Illuminate\Http\Request;

class Transportation extends Controller
{
    public function index()
    {
   
  $transport =  ModelsTransportation::all();
  
  return $transport;
 
 
    }


 
    public function store(Request $request)
    {
       
      
        $transport = new ModelsTransportation();

        $transport->schedueld_number =  $request->schedueld_number;
        
        $transport->deliveryroute =  $request->deliveryroute;

        $transport->type =  $request->type;

        $transport->save(); 


    }

    

    public function update(Request $request, $id)
    {
        $transport = ModelsTransportation::findOrFail($id);
        $transport->update($request->all());

        return $transport;

     

       
    }

          

    public function delete(Request $request, $id)
    {
        
        $item = ModelsTransportation::findOrFail($id);
        $item->delete();

        $transport=  ModelsTransportation::all();

        return $transport;
    }
}
