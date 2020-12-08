<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CourseFeatureModel;

class CourseFeatureController extends Controller
{
    function courseFeatureIndex(){
        return view('CourseFeature');
    }

    function getCourseFeatureData(){
        $result=json_decode(CourseFeatureModel::orderBy('id','desc')->get());
        return $result;
    }


    function CourseFeatureDelete(Request $req){
        $id=$req->input('id');
        $result=CourseFeatureModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getCourseFeatureDetails(Request $req){
        $id=$req->input('id');
        $result=CourseFeatureModel::where('id','=',$id)->get();
        return $result;
    }


    function courseFeatureUpdate(Request $req){
        $id=$req->input('id');
        $img=$req->input('img');
        $title=$req->input('title');
        $des=$req->input('des');

        $result=CourseFeatureModel::where('id','=',$id)->update([
            'img'=>$img,
            'title'=>$title,
            'des'=>$des,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function CourseFeatureAdd(Request $req){
        $img=$req->input('img');
        $title=$req->input('title');
        $des=$req->input('des');

        $result= CourseFeatureModel::insert([
            'img'=>$img,
            'title'=>$title,
            'des'=>$des,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
