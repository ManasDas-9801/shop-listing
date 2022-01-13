<?php

namespace App\Http\Controllers;

use App\Models\Cateogries;
use Illuminate\Http\Request;

class CateogriesController extends Controller
{

    public function index(){
        $data['cats'] = Cateogries::get();
        return view('home',$data);
    }
    public function store(Request $req){
       $validate = $req->validate([
           'cat_name' => 'required'
       ]);

       $cat = new Cateogries();
       $cat->name = $req->cat_name;
       $cat->save();
       return redirect()->back()->with('message','Cateogery Added SuccessFully');
    }
}
