<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\VisitorModel;
use App\Model\ClassCategoryModel;
use App\Model\ClassListModel;
use App\Model\ClassCompletedModel;
use App\Model\CoursePlanModel;
use App\Model\FileDocModel;

class HomeController extends Controller
{

        function HomeIndex(){

            $TotalVisitor=VisitorModel::count();
            $TotalClassCategory=ClassCategoryModel::count();
            $TotalClassList=ClassListModel::count();
            $TotalCompleteClass=ClassCompletedModel::count();
            $TotalCoursePlan=CoursePlanModel::count();
            $TotalFileDocument=FileDocModel::count();

            return view('Home',[
                  'TotalVisitor'=>$TotalVisitor,
                  'TotalClassCategory'=>$TotalClassCategory,
                  'TotalClassList'=>$TotalClassList,
                  'TotalCompleteClass'=>$TotalCompleteClass,
                  'TotalCoursePlan'=>$TotalCoursePlan,
                  'TotalFileDocument'=>$TotalFileDocument,
            ]);
        }

}
