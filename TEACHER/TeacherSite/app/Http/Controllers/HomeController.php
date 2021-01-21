<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\VisitorModel;
use App\Model\ClassListModel;
use App\Model\CoursePlanModel;
use App\Model\FileDocModel;

class HomeController extends Controller
{

        function HomeIndex(){

            $TotalClassList=ClassListModel::count();
            $TotalCoursePlan=CoursePlanModel::count();
            $TotalFileDocument=FileDocModel::count();

            return view('Home',[
                  'TotalClassList'=>$TotalClassList,
                  'TotalCoursePlan'=>$TotalCoursePlan,
                  'TotalFileDocument'=>$TotalFileDocument,
            ]);
        }

}
