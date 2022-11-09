<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Models\Inventary;

class ShopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function getinventary(Request $request)
    {
        $inventario=Inventary::getFilterByName($request->search);
        return view('shop', compact('inventario'));
    }
}
