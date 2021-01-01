<?php

namespace App\Http\Controllers;
use App\Model\StudentListModel;
use Illuminate\Support\Facades\Session;


class ClassRoomController extends Controller
{
    function ClassRoomPage(){
        return view('Classroom.classRoom');
    }

    function classRoomHome(){

        if(Session::has('token')==true){
            $phn=Session::get('token');
            $result=StudentListModel::where('phn','=',$phn)->get();

            return view('Classroom.classRoom',[
                'result'=>$result
            ]);
        }

    }

}
