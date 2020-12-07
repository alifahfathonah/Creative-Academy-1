<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\RefundModel;
class RefundController extends Controller
{
    function RefundPage(){
        $refund= RefundModel::all();
        return view('Page.refund',[
            'refund'=>$refund
        ]);
    }
}
