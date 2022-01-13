<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Rating;
class Shop extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function cateogrie()
	{
		return $this->belongsTo('App\Models\Cateogries','cat_id');
	}

}
