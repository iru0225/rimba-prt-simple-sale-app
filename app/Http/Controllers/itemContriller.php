<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class itemContriller extends Controller
{
    function getRecomendedItem(){
        $data = Item::inRandomOrder()->limit(5)->get();
        return $data;
    }
}
