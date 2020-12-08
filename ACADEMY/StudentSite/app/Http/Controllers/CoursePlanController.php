<?php

namespace App\Http\Controllers;

use App\Model\CoursePlanModel;
use App\Model\MoreSeriesModel;
use Illuminate\Http\Request;
use MoreSeriesTable;

class CoursePlanController extends Controller
{
    function CoursePlanPage(){
        $coursePlan= CoursePlanModel::all();
        return view('Page.coursePlan',[
            'coursePlan'=>$coursePlan
        ]);
    }

    function CoursesPage(){
        $courses= MoreSeriesModel::all();
        return view('Page.courses',[
            'courses'=>$courses
        ]);
    }
}
