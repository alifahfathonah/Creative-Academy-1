<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\VisitorModel;
use App\Model\ClassCategoryModel;


class HomeController extends Controller
{

        function HomeIndex(){

            $TotalVisitor=VisitorModel::count();
            $TotalClassCategory=ClassCategoryModel::count();

            return view('Home',[
                  'TotalVisitor'=>$TotalVisitor,
                  'TotalClassCategory'=>$TotalClassCategory,
            ]);
        }


}
