<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listjobs ;
use Illuminate\Auth\Events\Validated;

class listjobsController extends Controller
{
    //
  public  function index(){

    dd(listjobs::all());
        return  View('listes',[
            'heading'=>'latest jobs',
            'listes'=>listjobs::all()
        ]);
    }
public function getOneItem ($id){
    return listjobs::find($id);
}

function createItem(Request $request){
    //dd()
    $item= $request->Validated([
        'title'=>'required',
        'company'=>'required',
        'email'=>'required',
        'description'=>'required'
    ]);
  
    listjobs::create($item);
    //redirect()
    return $item;
}

}
