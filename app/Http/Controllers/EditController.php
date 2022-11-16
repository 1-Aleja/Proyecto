<?php

namespace App\Http\Controllers;

use Facades\App\Models\Inventary;
use Illuminate\Http\Request;


class EditController extends Controller
{

    public function update(Request $request)
    {
        Inventary::saveOrUpdate(request()->all());
    }
}