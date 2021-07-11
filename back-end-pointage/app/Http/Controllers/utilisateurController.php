<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Utilisateur;
use Illuminate\Http\Request;




class UtilisateurController extends Controller
{
  
    function getUtilisateur()
    {
        $utilisateurModel=new Utilisateur();
       $data=$utilisateurModel->getUtilisateur();
       return response()->json($data);
    }
    
    function addUtilisateur(Request $request)
    {
        $utilisateurModel=new Utilisateur();
        $data=$utilisateurModel->addUtilisateur($request->all());
       
    }
    
    function deleteUtilisateur(Request $request)
    {
       $id=$request->id;
       $utilisateurModel=new Utilisateur();
      $utilisateurModel->deleteUtilisateur($id);
    }
    function updateUtilisateur(Request $request)
    {
        $id=$request->id;
        $utilisateurModel=new Utilisateur();
       $utilisateurModel->updateUtilisateur($id,$request->all());

    }

  
   
}