<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listjobs ;
use Illuminate\Auth\Events\Validated;

class listjobsController extends Controller
{
    //
  public  function index(){

   // dd(listjobs::all());
        return  View('listes',[
            'heading'=>'latest jobs',
            'listes'=>listjobs::all()
        ]);
    }
public function getOneItem ($id){
    
    return listjobs::find($id);
}
public function createItem(Request $request)
    {
        try {
            $validatedData = $request->validate([
                'title' => 'required',
                'company' => 'required',
                'email' => 'required|email',
                'description' => 'required'
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['errors' => $e->errors()], 422);
        }
        


       $job = ListJobs::create($validatedData);
 
        response()->json(['message' => 'Job created successfully', 'job' => $job], 201);
    }
}
