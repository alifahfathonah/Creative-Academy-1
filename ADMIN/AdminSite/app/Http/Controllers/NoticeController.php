<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\NoticeModel;

class NoticeController extends Controller
{
    function Notice(){
        return view('Notice');
    }

    function getNoticeData(){
        $result=json_decode(NoticeModel::orderBy('id','desc')->get());
        return $result;
    }

    function NoticeDelete(Request $req){
        $id=$req->input('id');
        $result=NoticeModel::where('id','=',$id)->delete();
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getNoticeDetails(Request $req){
        $id=$req->input('id');
        $result=NoticeModel::where('id','=',$id)->get();
        return $result;
    }

    function NoticeUpdate(Request $req){
        $id=$req->input('id');
        $des=$req->input('des');

        $result=NoticeModel::where('id','=',$id)->update([
            'des'=>$des,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function NoticeAdd(Request $req){
        $des=$req->input('des');
        $result= NoticeModel::insert([
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
