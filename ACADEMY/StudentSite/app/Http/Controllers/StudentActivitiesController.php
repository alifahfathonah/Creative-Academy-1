<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\ClassCompletedModel;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;

class StudentActivitiesController extends Controller
{
    function  AddVideoView(Request $request){
        $video_link=$request->input('video_link');
        $title=$request->input('title');
        $ip=$_SERVER['REMOTE_ADDR'];
        date_default_timezone_set("Asia/Dhaka");
        $logTime= date("h:i:sa");
        $logDate= date("d-m-Y");
        if(Session::has('token')==true){
            $phn=Session::get('token');
            $result=ClassCompletedModel::insert(['phn'=>$phn,'ip_address'=>$ip,'date'=>$logDate,'time'=>$logTime,'video_link'=>$video_link,'title'=>$title]);
            return $result;
        }
        else if(Cookie::has('token')==true){
            $phn=Cookie::get('token');
            $result=ClassCompletedModel::insert(['phn'=>$phn,'ip_address'=>$ip,'date'=>$logDate,'time'=>$logTime,'video_link'=>$video_link,'title'=>$title]);
            return $result;
        }
    }

}
