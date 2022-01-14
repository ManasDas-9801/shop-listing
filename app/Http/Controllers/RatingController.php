<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function store(Request $req){
        $req->validate([
           'shop_id' => 'required',
           'email' => 'required',
           'rating' =>'required'
       ]);
        $check =  Rating::where([['email','=',$req->email],['shop_id','=',$req->shop_id]])->exists();
         if(!$check){
            $rating = new Rating();
            $rating->shop_id = $req->shop_id;
            $rating->email = $req->email;
            $rating->rating_num = $req->rating;
            $rating->message =  $req->message;
            $rating->save();
            return redirect()->back()->with('message','Rating Added Successfully');

         }
         else{
            return redirect()->back()->with('err','You Had Already Rated This Shop');
         }

    }
}