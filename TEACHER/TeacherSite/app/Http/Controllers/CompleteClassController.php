<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ClassCompletedModel;

class CompleteClassController extends Controller
{
    function CompleteClassIndex(){
        return view('CompleteClass');
    }

    function getCompleteClassData(){
        $result=json_decode(ClassCompletedModel::orderBy('id','desc')->get());
        return $result;
    }


    function CompleteClassDelete(Request $req){
        $id=$req->input('id');
        $result=ClassCompletedModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getCompleteClassDetails(Request $req){
        $id=$req->input('id');
        $result=ClassCompletedModel::where('id','=',$id)->get();
        return $result;
    }


    function CompleteClassUpdate(Request $req){
        $id=$req->input('id');
        $phn=$req->input('phn');
        $ip_address=$req->input('ip_address');
        $date=$req->input('date');
        $time=$req->input('time');
        $video_link=$req->input('video_link');
        $title=$req->input('title');

        $result=ClassCompletedModel::where('id','=',$id)->update([
            'phn'=>$phn,
            'ip_address'=>$ip_address,
            'date'=>$date,
            'time'=>$time,
            'video_link'=>$video_link,
            'title'=>$title,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function CompleteClassAdd(Request $req){
        $phn=$req->input('phn');
        $ip_address=$req->input('ip_address');
        $date=$req->input('date');
        $time=$req->input('time');
        $video_link=$req->input('video_link');
        $title=$req->input('title');

        $result= ClassCompletedModel::insert([
            'phn'=>$phn,
            'ip_address'=>$ip_address,
            'date'=>$date,
            'time'=>$time,
            'video_link'=>$video_link,
            'title'=>$title,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
