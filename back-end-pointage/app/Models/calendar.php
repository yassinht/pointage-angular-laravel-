<?php
namespace App\Models;
use DB;

class Calendar
{
 
    function getCalendar()
    {
        $data=DB::table('magasin')->get();
        return $data;
      }
     
      
      
      
      function addCalendar($data)
      {
       DB::table('magasin')->insert($data); 
      }
      
      
      
      
      
      function deleteCalendar($id)
      {
      DB::table('magasin')->where('id',$id)->delete();
      }
      
      
      function updateCalendar($id,$data)
      {
          DB::table('magasin')->where('id',$id)->update($data);  
      }
      
      
      function getOneCalendar($id)
      {
          $data=DB::table('magasin')->where('id',$id)->get()->first();
          return $data;
      }
      
    }

