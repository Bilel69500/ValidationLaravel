<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use  App\Models\Statue;

class ActionController extends Controller
{
    public  function add(Request $request)
    {
        statue::addOne($request);
        return redirect('/liste');
    }
    public  function delete(Request $request)
    {
    statue::deleteOne($request);
    return redirect ('liste');
}

    public function updateOne(Request $request)
    {
        statue::updateOne($request);
        return redirect('liste');
    }
}
