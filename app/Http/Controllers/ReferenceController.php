<?php
namespace App\Http\Controllers;
use App\Models\Inventary;
use Iluminate\Support\Facades\DB;
class ReferenceController extends Controller
{
    public function getreference($reference)
    {
        $inventario=Inventary::where('reference',$reference)->first();
        return view('descriptiontoys',['inventario'=>$inventario]);
    }
}