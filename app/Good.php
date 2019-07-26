<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Good extends Model
{
    /**
     * @var int
     */
    public $query_page = 100;
    /**
     * @see 一对多
     */
    public function goodsimgs()
    {
        return $this->hasMany(GoodsImg::class,'goods_id');
    }

    /**
     * @see 判断用户是否有地址
     */
    public function userHasExistsAddress():bool
    {
        return (\Auth::user()->ship_address) ? true :false;
    }



}
