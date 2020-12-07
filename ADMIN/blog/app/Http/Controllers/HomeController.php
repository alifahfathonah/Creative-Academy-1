<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\VisitorModel;
use App\Model\MoreSeriesModel;
use App\Model\StudentListModel;


class HomeController extends Controller
{

        function HomeIndex(){

            $TotalVisitor=VisitorModel::count();
            $TotalCourse=MoreSeriesModel::count();
            $TotalStudent=StudentListModel::count();


            return view('Home',[
                  'TotalVisitor'=>$TotalVisitor,
                  'TotalCourse'=>$TotalCourse,
                  'TotalStudent'=>$TotalStudent
            ]);
        }


}
