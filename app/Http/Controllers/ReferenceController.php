<?php
namespace App\Http\Controllers;

use App\Models\Inventary;
use Iluminate\Support\Facades\DB;

class ReferenceController extends Controller
{
    public function getreference($id)
    {
        
        $inventario=Inventary::where('id', $id)->first();
        return view('descriptiontoys', ['inventario'=>$inventario]);
       
    }
}