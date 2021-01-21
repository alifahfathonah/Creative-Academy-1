<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ClassListModel;
use App\Model\FileDocModel;

class HomeController extends Controller
{

        function HomeIndex(){

            $TotalClassList=ClassListModel::count();
            $TotalFileDocument=FileDocModel::count();

            return view('Home',[
                  'TotalClassList'=>$TotalClassList,
                  'TotalFileDocument'=>$TotalFileDocument
            ]);
        }

}
