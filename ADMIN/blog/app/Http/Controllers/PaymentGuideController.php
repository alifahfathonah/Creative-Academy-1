<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\PaymentGuideModel;

class PaymentGuideController extends Controller
{
    function PaymentGuideIndex(){
        return view('PaymentGuide');
    }

    function getPaymentGuideData(){
        $result=json_decode(PaymentGuideModel::orderBy('id','desc')->get());
        return $result;
    }


    function PaymentGuideDelete(Request $req){
        $id=$req->input('id');
        $result=PaymentGuideModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getPaymentGuideDetails(Request $req){
        $id=$req->input('id');
        $result=PaymentGuideModel::where('id','=',$id)->get();
        return $result;
    }


    function PaymentGuideUpdate(Request $req){
        $id=$req->input('id');
        $des=$req->input('des');
        $price=$req->input('price');
        $banner=$req->input('banner');

        $result=PaymentGuideModel::where('id','=',$id)->update([
            'des'=>$des,
            'price'=>$price,
            'banner'=>$banner,
        ]);

        if ($result==true){
            return 1;
        }
        else{
            return 0;
        }

    }


    function PaymentGuideAdd(Request $req){
        $des=$req->input('des');
        $price=$req->input('price');
        $banner=$req->input('banner');

        $result= PaymentGuideModel::insert([
            'des'=>$des,
            'price'=>$price,
            'banner'=>$banner,
        ]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
