<?php

namespace App\Http\Controllers;
use App\Models\Statue;

use Illuminate\Http\Request;

class NavController extends Controller
{
    public function show()
	{
		return view('/');
	}


    public function add()
	{
		return view('add');
    }
    

	public function list()
	{
		$Statue = statue::getAll();
		return view('list', ['statue' => $Statue]);
	}

    public function edit($id)
    {
        $Statue = statue::findOrFail($id);
		return view ('edit', compact('Statue'));
	}


}
