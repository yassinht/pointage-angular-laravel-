<?php
namespace App\Models;
use DB;

class Employe
{
 
    function getEmploye()
    {
        $data=DB::table('employee')->get();
        return $data;
      }
     
      
      
      
      function addEmploye($data)
      {
       DB::table('employee')->insert($data); 
      }
      
      
      
      
      
      function deleteEmploye($id)
      {
      DB::table('employee')->where('id',$id)->delete();
      }
      
      
      function updateEmploye($id,$data)
      {
          DB::table('employee')->where('id',$id)->update($data);  
      }
      
      
      function getOneEmploye($id)
      {
          $data=DB::table('employee')->where('id',$id)->get()->first();
          return $data;
      }
      
    }



