<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class StatusController extends Controller
{
    public function index(){

        $statuses = Status::all();

        return view('statuses.index', compact('statuses'));
    }

    public function create(){

        return view('statuses.create');
    }

    public function store(Request $request){

        $input = $request->all();

        Status::create($input);
        return redirect('/status');
    }
}
