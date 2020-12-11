<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CoursePlanModel;

class CoursePlanController extends Controller
{
    function CoursePlanIndex(){
        return view('CoursePlan');
    }

    function getCoursePlanData(){
        $result=json_decode(CoursePlanModel::orderBy('id','desc')->get());
        return $result;
    }


    function CoursePlanDelete(Request $req){
        $id=$req->input('id');
        $result=CoursePlanModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getCoursePlanDetails(Request $req){
        $id=$req->input('id');
        $result=CoursePlanModel::where('id','=',$id)->get();
        return $result;
    }


    function CoursePlanUpdate(Request $req){
        $id=$req->input('id');
        $title=$req->input('title');
        $short_des=$req->input('short_des');
        $key_points=$req->input('key_points');
        $video=$req->input('video');

        $result=CoursePlanModel::where('id','=',$id)->update([
            'title'=>$title,
            'short_des'=>$short_des,
            'key_points'=>$key_points,
            'video'=>$video,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function CoursePlanAdd(Request $req){
        $title=$req->input('title');
        $short_des=$req->input('short_des');
        $key_points=$req->input('key_points');
        $video=$req->input('video');

        $result= CoursePlanModel::insert([
            'title'=>$title,
            'short_des'=>$short_des,
            'key_points'=>$key_points,
            'video'=>$video,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
