<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Societee;
use Illuminate\Http\Request;




class SocieteeController extends Controller
{
  
    function getSocietee()
    {
        $societeeModel=new Societee();
       $data=$societeeModel->getSocietee();
       return response()->json($data);
    }
    
    function addSocietee(Request $request)
    {
        $societeeModel=new Societee();
        $data=$societeeModel->addSocietee($request->all());
       
    }
   
  
   
}