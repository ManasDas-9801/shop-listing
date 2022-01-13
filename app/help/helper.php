<?php
use App\Models\Rating;
if(!function_exists('shop_rating'))
{
    function shop_rating($shopid)
    {
        return round(Rating::where('shop_id',$shopid)->avg('rating_num'));
    }
    function shop_rating_count($shopid)
    {
        return Rating::where('shop_id',$shopid)->count();
    }
}

?>