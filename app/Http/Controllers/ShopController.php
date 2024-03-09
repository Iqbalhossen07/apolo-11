<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function show()
    {
        $data = Shop::all();
        return view('main',['members'=>$data]);
    }
}
