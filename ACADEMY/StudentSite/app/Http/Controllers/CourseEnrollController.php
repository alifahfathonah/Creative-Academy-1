<?php

namespace App\Http\Controllers;

use App\Model\MoreSeriesModel;
use App\Model\PurchaseModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CourseEnrollController extends Controller
{
    function CourseEnrollPage(Request $request){
       $id=$request->id;

        $result=MoreSeriesModel::where(['id'=>$id])->get();

        return view('Page.courseEnrollPage',[
            'result'=>$result
        ]);

    }


    function onPurchase(Request $req){
        $code=$req->input('code');
        $phn=Session::get('token');
        $payment_type=$req->input('payment_type');
        $trxID=$req->input('trxID');
        $payment_mobile=$req->input('payment_mobile');
        $status="panding";

        $result=PurchaseModel::insert([
            'code'=>$code,
            'phn'=>$phn,
            'payment_type'=>$payment_type,
            'trxID'=>$trxID,
            'payment_mobile'=>$payment_mobile,
            'status'=>$status
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
