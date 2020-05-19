<?php

namespace App\Http\Controllers;

use App\Shoppinglist;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Database\Eloquent;
use Illuminate\Support\Facades\DB;



class ShoppinglistController extends Controller
{
    public function index(){
     $shoppinglists =Shoppinglist::with(['items', 'user'])->get();

    return $shoppinglists;

    }

}
