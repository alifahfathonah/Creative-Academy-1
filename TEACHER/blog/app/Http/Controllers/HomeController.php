<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\VisitorModel;


class HomeController extends Controller
{

        function HomeIndex(){

            $TotalVisitor=VisitorModel::count();


            return view('Home',[
                  'TotalVisitor'=>$TotalVisitor
            ]);
        }


}
