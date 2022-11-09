<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Models\Toy;
use Facades\App\Models\Inventary;

class ToyController extends Controller
{
    public function gettoy()
    {
        return view('toy');
        
    }
    public function getedit(Request $request)
    {
        dd($request->all());
        $edit=$request->only('name', 'cost_price', 'sale_price', 'quantity_available', 'description', 'toy_image');
       
        dd($edit);
    }

    public function create(Request $request)
    {

        try {
            return view('toy.create');
        } catch (\Throwable $th) {
            \Log::info('Error create toy');
        }

    }

    public function store(Request $request)
    {
        try {
            $requestField = $request->all();
            $requestField[''] = 0;
            Inventary::saveOrUpdate($request);
            $request->session()->flash('status', 'Toy was create successful!');
            return view('toy.create');
        } catch (\Throwable $th) {
            \Log::info('Error create toy');
        }
    }
}
