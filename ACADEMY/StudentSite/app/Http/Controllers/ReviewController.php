<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ReviewModel;

class ReviewController extends Controller
{
    function AllReview(){
        $Review= ReviewModel::all();
        return view('Page.review',[
            'Review'=>$Review
        ]);
    }
}
