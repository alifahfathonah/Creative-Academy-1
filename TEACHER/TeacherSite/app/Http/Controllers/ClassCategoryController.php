<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ClassCategoryModel;

class ClassCategoryController extends Controller
{
    function ClassCategoryIndex(){
        return view('ClassCategory');
    }

    function getClassCategoryData(){
        $result=json_decode(ClassCategoryModel::orderBy('id','desc')->get());
        return $result;
    }


    function ClassCategoryDelete(Request $req){
        $id=$req->input('id');
        $result=ClassCategoryModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getClassCategoryDetails(Request $req){
        $id=$req->input('id');
        $result=ClassCategoryModel::where('id','=',$id)->get();
        return $result;
    }


    function ClassCategoryUpdate(Request $req){
        $id=$req->input('id');
        $name=$req->input('name');
        $des=$req->input('des');
        $title=$req->input('title');
        $img=$req->input('img');

        $result=ClassCategoryModel::where('id','=',$id)->update([
            'name'=>$name,
            'des'=>$des,
            'title'=>$title,
            'img'=>$img,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function ClassCategoryAdd(Request $req){
        $id=$req->input('id');
        $name=$req->input('name');
        $des=$req->input('des');
        $title=$req->input('title');
        $img=$req->input('img');

        $result= ClassCategoryModel::insert([
            'name'=>$name,
            'des'=>$des,
            'title'=>$title,
            'img'=>$img,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
