<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Models\Calendar;
use Illuminate\Http\Request;




class CalendarController extends Controller
{
  
    function getCalendar()
    {
        $calendarModel=new Calendar();
       $data=$calendarModel->getCalendar();
       return response()->json($data);
    }
    
    function addCalendar(Request $request)
    {
        $calendarModel=new Calendar();
        $data=$calendarModel->addCalendar($request->all());
       
    }
    
    function deleteCalendar(Request $request)
    {
       $id=$request->id;
       $calendarModel=new Calendar();
      $calendarModel->deleteCalendar($id);
    }
    function updateCalendar(Request $request)
    {
        $id=$request->id;
        $calendarModel=new Calendar();
       $calendarModel->updateCalendar($id,$request->all());

    }

  
   
}