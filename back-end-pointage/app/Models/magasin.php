<?php
namespace App\Models;
use DB;

class Magasin
{
 
    function getMagasin()
    {
        $data=DB::table('magasin')->get();
        return $data;
      }
     
      
      
      
      function addMagasin($data)
      {
       DB::table('magasin')->insert($data); 
      }
      
      
      
      
      
      function deleteMagasin($id)
      {
      DB::table('magasin')->where('id',$id)->delete();
      }
      
      
      function updateMagasin($id,$data)
      {
          DB::table('magasin')->where('id',$id)->update($data);  
      }
      
      
      function getOneMagasin($id)
      {
          $data=DB::table('magasin')->where('id',$id)->get()->first();
          return $data;
      }
      
    }

