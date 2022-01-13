<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Models\Cateogries;
use DB;
class ShopController extends Controller
{
   public function index(Request $req){
        $search = $req->search;
        $search_cat = $req->search_cat;
        $data['shops'] = DB::table('shops')
                        ->join('cateogries', 'cateogries.id', '=', 'shops.cat_id')
                        ->where('shops.name','like','%'.$search.'%')
                        ->where('cateogries.name','like','%'.$search_cat.'%')
                        ->select('shops.name as name' , 'shops.id as id','cateogries.name as cat_name' )
                        ->paginate(3);
                         return view('view',$data);
   }
   
   public function store(Request $req){
       $req->validate([
           'shop_name' => 'required',
           'cat_id' => 'required'
       ]);
      $totalCat =  $req->cat_id;
      foreach ($totalCat as $new_cat)  {
        
        $shop = new Shop();
        $shop->name = $req->shop_name;
        $shop->cat_id = $new_cat;
 
        $shop->save();
    }
    return redirect()->back()->with('message','Shop Added SuccessFully');
   }
}
