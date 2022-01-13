<?php

namespace App\Models;
use App\Models\Shops;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cateogries extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function Shops(){
        return $this->hasMany(App\Models\Shops);
    }

}
