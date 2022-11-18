<?php

namespace App\Http\Controllers;

use App\Models\inventary;
use Illuminate\Http\Request;
use App\Models\Edit;
use Illuminate\Support\Facades\Storage;

class InventaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if( $request->file('file') ){

            $file = $request->file('file')[0];
  
            $nameFile = 'mariaDB' . "_" . date('m_d_Y_h_i_s', time()) ."_". $file->getClientOriginalName();
  
            Storage::disk('local')->put($nameFile, \File::get($file));
  
          }
        Inventary::insert(request()->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function show(inventary $inventary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function edit(inventary $inventary)
    {

      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inventary $inventary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inventary  $inventary
     * @return \Illuminate\Http\Response
     */
    public function destroy(inventary $inventary)
    {
        //
    }
}
