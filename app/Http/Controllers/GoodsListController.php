<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GoodsListController extends Controller
{
    public function pageload(){
        return view('goodslist');
    }
}
