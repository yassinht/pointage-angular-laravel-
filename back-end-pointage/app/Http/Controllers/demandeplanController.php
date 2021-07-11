<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Demandeplan;
use Illuminate\Http\Request;




class DemandeplanController extends Controller
{
  
    function getDemandeplan()
    {
        $demandeplanModel=new Demandeplan();
       $data=$demandeplanModel->getDemandeplan();
       return response()->json($data);
    }
    
    function addDemandeplan(Request $request)
    {
        $demandeplanModel=new Demandeplan();
        $data=$demandeplanModel->addDemandeplan($request->all());
       
    }
    
    function deleteDemandeplan(Request $request)
    {
       $id=$request->id;
       $demandeplanModel=new Demandeplan();
      $demandeplanModel->deleteDemandeplan($id);
    }
    function updateDemandeplan(Request $request)
    {
        $id=$request->id;
        $demandeplanModel=new Demandeplan();
       $demandeplanModel->updateDemandeplan($id,$request->all());

    }

  
   
}