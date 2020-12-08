<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\CourseFeatureModel;
use App\Model\CoursePlanModel;
use  App\Model\PaymentGuideModel;
use  App\Model\StudentListModel;
use  App\Model\ClassListModel;
use  App\Model\FreeClassModel;
use App\Model\MoreSeriesModel;
use App\Model\VisitorModel;

class HomeController extends Controller
{
    function HomePage(){
        $CourseFeature= CourseFeatureModel::all();
        $CoursePlan= CoursePlanModel::all();
        $PaymentGuide=PaymentGuideModel::all();
        $TotalClass=ClassListModel::count();
        $TotalStudent=StudentListModel::count();
        $freeClass=FreeClassModel::all();
        $moreSeries=MoreSeriesModel::all();

        $ip=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $visitTime= date("h:i:sa");
        $visitDate= date("d-m-Y");

        VisitorModel::insert(['ip_address'=>$ip,'visit_time'=>$visitTime,'visit_date'=>$visitDate]);

        return view('Page.home',[
            'CourseFeature'=>$CourseFeature,
            'CoursePlan'=>$CoursePlan,
            'PaymentGuide'=>$PaymentGuide,
            'TotalClass'=>$TotalClass,
            'TotalStudent'=>$TotalStudent,
            'freeClass'=>$freeClass,
            'moreSeries'=>$moreSeries,
        ]);
    }
}
