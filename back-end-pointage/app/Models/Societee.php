<?php
namespace App\Models;
use DB;

class Societee
{
 
    function getSocietee()
    {
        $data=DB::table('societee')->get();
        return $data;
      }
     
      
      
      
      function addSocietee($data)
      {
       DB::table('societee')->insert($data); 
      }
      
      
      
      
      
     
    }

