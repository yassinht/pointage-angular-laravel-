<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Magasin;
use Illuminate\Http\Request;




class MagasinController extends Controller
{
  
    function getMagasin()
    {
        $magasinModel=new Magasin();
       $data=$magasinModel->getMagasin();
       return response()->json($data);
    }
    
    function addMagasin(Request $request)
    {
        $magasinModel=new Magasin();
        $data=$magasinModel->addMagasin($request->all());
       
    }
    
    function deleteMagasin(Request $request)
    {
       $id=$request->id;
       $magasinModel=new Magasin();
      $magasinModel->deleteMagasin($id);
    }
    function updateMagasin(Request $request)
    {
        $id=$request->id;
        $magasinModel=new Magasin();
       $magasinModel->updateMagasin($id,$request->all());

    }

  
   
}