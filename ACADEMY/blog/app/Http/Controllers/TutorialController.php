<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ClassCategoryModel;
use  App\Model\ClassListModel;

class TutorialController extends Controller
{
    function TutorialPage(){
        $category=ClassCategoryModel::all();
        return view('Classroom.tutorials',['TutorialCategory'=>$category]);
    }

    function TutorialByCategory(Request $request){
        $Category= $request->input('ClassCategory');
        $ClassList=ClassListModel::orderBy('id','desc')->where('category','=',$Category)->get();
        return $ClassList;
    }
}
