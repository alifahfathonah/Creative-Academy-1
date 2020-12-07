<?php

namespace App\Http\Controllers;

use App\Model\NoticeModel;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function  MessagePage(){
        return view('Classroom.message');
    }

    function  MessageList(){
        $msg=NoticeModel::orderBy('id','desc')->get();
        return $msg;
    }
}
