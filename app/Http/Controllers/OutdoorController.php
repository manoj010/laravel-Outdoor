<?php

namespace App\Http\Controllers;

use App\Models\outdoor;
use Illuminate\Http\Request;

class OutdoorController extends Controller
{
    public function index() {
        return view('welcome', ['list' => outdoor::all()]);
    }

    public function addData(Request $request) {
        // print_r($request->all());
        $add = new outdoor();
        $add -> batch = $request -> batch;
        $add -> quantity = $request -> quantity;
        $add -> status = $request -> status;
        $add -> remarks = $request -> remarks;
        $add -> save();
        return redirect('/');  
    }

    public function delete($id) {
        $data = outdoor::find($id);
        $data -> delete();
        return redirect('/');
    }

    public function edit($id) {
        $data = outdoor::find($id);
        return view('edit', ['data' => $data]);
    }

    public function updateData(Request $request) {
        $add = outdoor::find($request->id);
        $add -> batch = $request -> batch;
        $add -> quantity = $request -> quantity;
        $add -> status = $request -> status;
        $add -> remarks = $request -> remarks;
        $add -> save();
        return redirect('/');  
    }
}
