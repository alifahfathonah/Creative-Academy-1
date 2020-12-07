<?php

namespace App\Http\Controllers;
use App\Model\ClassCompletedModel;
use Illuminate\Http\Request;
use  App\Model\ClassListModel;
use  App\Model\FileDocModel;
use  App\Model\NoticeModel;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class ClassRoomController extends Controller
{
    function ClassRoomPage(){
        return view('Classroom.classRoom');
    }

    function ClassRoomSummary(){
        $TotalClass=ClassListModel::count();
        $TotalFile=FileDocModel::count();
        $TotalMessage=NoticeModel::count();
        if(Session::has('token')==true){
            $phn=Session::get('token');
            $result=ClassCompletedModel::where('phn','=',$phn)->distinct('video_link')->count('video_link');
            $view=ClassCompletedModel::where('phn','=',$phn)->count();
            $countObj=[
                'UniqueView'=>$result,
                'TotalView'=>$view,
                'TotalClass'=>$TotalClass,
                'TotalFile'=>$TotalFile,
                'TotalMessage'=>$TotalMessage,
            ];
            return  json_encode($countObj);
        }
        else if(Cookie::has('token')==true){
            $phn=Cookie::get('token');
            $result=ClassCompletedModel::where('phn','=',$phn)->distinct('video_link')->count('video_link');
            $view=ClassCompletedModel::where('phn','=',$phn)->count();
            $countObj=[
                'UniqueView'=>$result,
                'TotalView'=>$view,
                'TotalClass'=>$TotalClass,
                'TotalFile'=>$TotalFile,
                'TotalMessage'=>$TotalMessage,
            ];
            return  json_encode($countObj);
        }
    }


    function LatestUploads(){
        $LatestClass=ClassListModel::orderBy('id','desc')->take(5)->get();
        return  $LatestClass;
    }

}
