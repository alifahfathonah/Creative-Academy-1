<?php

namespace App\Http\Controllers;

use App\Model\MoreSeriesModel;
use Illuminate\Http\Request;

class CourseEnrollController extends Controller
{
    function CourseEnrollPage(Request $request){
       $id=$request->id;

        $result=MoreSeriesModel::where(['id'=>$id])->get();

        return view('Page.courseEnrollPage',[
            'result'=>$result
        ]);

    }
}
