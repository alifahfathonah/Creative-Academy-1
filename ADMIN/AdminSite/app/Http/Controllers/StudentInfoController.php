<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\StudentListModel;

class StudentInfoController extends Controller
{
    function StudentIndex(){
        return view('StudentList');
    }

    function getStudentData(){
        $result=json_decode(StudentListModel::orderBy('id','desc')->get());
        return $result;
    }


    function StudentDelete(Request $req){
        $id=$req->input('id');
        $result=StudentListModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

}
