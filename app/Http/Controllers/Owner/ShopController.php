<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Shop;

class ShopController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:owners');
    }

    public function index()
    {
        $owner_id = Auth::id();

        $shops = Shop::where('owner_id', $owner_id)->get();

        return view('owner.shops.index', compact('shops'));
    }

    public function edit()
    {
    }

    public function update()
    {
    }
}
