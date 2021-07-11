<?php
namespace App\Models;
use DB;

class Demandeplan
{
 
    function getDemandeplan()
    {
        $data=DB::table('demandeplan')->get();
        return $data;
      }
     
      
      
      
      function addDemandeplan($data)
      {
       DB::table('demandeplan')->insert($data); 
      }
      
      
      
      
      
      function deleteDemandeplan($id)
      {
      DB::table('demandeplan')->where('id',$id)->delete();
      }
      
      
      function updateDemandeplan($id,$data)
      {
          DB::table('demandeplan')->where('id',$id)->update($data);  
      }
      
      
      function getOneDemandeplan($id)
      {
          $data=DB::table('demandeplan')->where('id',$id)->get()->first();
          return $data;
      }
      
    }

