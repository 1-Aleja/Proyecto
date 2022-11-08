<?php


namespace App\Http\Controllers;
use App\Models\Edit;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class HomeController extends Controller
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
    // public function index()
    // {
    //     return view('toy');
    // }
    public function index(Request $request)
    {
    // return view('shop');
    // $edit=$request->all();
    // if ($request->hasFile(key:'toy_image')) {
    //     $edit['toy_image']=$request->file(key:'toy_image')->store(path:'toys');
    // }
    // dd($edit);
}

        
    

}
