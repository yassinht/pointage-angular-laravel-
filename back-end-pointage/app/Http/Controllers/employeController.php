<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;




class EmployeController extends Controller
{
  
    function getEmploye()
    {
        $employeModel=new Employe();
       $data=$employeModel->getEmploye();
       return response()->json($data);
    }
    
    function addEmploye(Request $request)
    {
        $employeModel=new Employe();
        $data=$employeModel->addEmploye($request->all());
       
    }
    
    function deleteEmploye(Request $request)
    {
       $id=$request->id;
       $employeModel=new Employe();
      $employeModel->deleteEmploye($id);
    }
    function updateEmploye(Request $request)
    {
        $id=$request->id;
        $employeModel=new Employe();
       $employeModel->updateEmploye($id,$request->all());

    }

  
   
}