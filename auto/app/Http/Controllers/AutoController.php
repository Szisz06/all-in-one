<?php

namespace App\Http\Controllers;

use App\Models\Auto;
use Illuminate\Http\Request;

class AutoController extends Controller
{
    public function index(){ 

        return Auto::all(); 

    } 

 

    public function show($id){ 

        $auto = response()->json(Auto::find($id)); 

        return $auto; 

    } 

 

    public function store(Request $request){ 

        $auto = new Auto(); 

        $auto->name = $request->name; 

        $auto->year = $request->year;

        $auto->price = $request->price;

        $auto->fuel_type = $request->fuel_type;

        $auto->save(); 

    } 

 

    public function update(Request $request, $id){ 

        $auto = Auto::find($id); 

        $auto->name = $request->name; 

        $auto->year = $request->year; 
        
        $auto->price = $request->price;

        $auto->fuel_type = $request->fuel_type;

        $auto->save(); 

    } 

 

    public function destroy($id){ 

        Auto::find($id)->delete(); 

         

    } 

} 