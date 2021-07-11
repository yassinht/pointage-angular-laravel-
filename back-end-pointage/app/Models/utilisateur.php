<?php
namespace App\Models;
use DB;

class Utilisateur
{
 
    function getUtilisateur()
    {
        $data=DB::table('utilisateur')->get();
        return $data;
      }
     
      
      
      
      function addUtilisateur($data)
      {
       DB::table('utilisateur')->insert($data); 
      }
      
      
      
      
      
      function deleteUtilisateur($id)
      {
      DB::table('utilisateur')->where('id',$id)->delete();
      }
      
      
      function updateUtilisateur($id,$data)
      {
          DB::table('utilisateur')->where('id',$id)->update($data);  
      }
      
      
      function getOneUtilisateur($id)
      {
          $data=DB::table('utilisateur')->where('id',$id)->get()->first();
          return $data;
      }
      
    }

