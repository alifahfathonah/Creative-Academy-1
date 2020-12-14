<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\VisitorModel;
use App\Model\MoreSeriesModel;
use App\Model\StudentListModel;
use App\Model\LoginSuccessModel;
use App\Model\TeacherModel;
use App\Model\NoticeModel;
use App\Model\BlogModel;
use App\Model\ContactModel;
use App\Model\ReviewModel;

class HomeController extends Controller
{

        function HomeIndex(){

          

            return view('Home',[

            ]);
        }


}
