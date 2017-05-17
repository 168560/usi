<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Speciality;
use App\Http\Requests;

class SpecialityController extends Controller
{
    public function show(){
        $specialities = Speciality::all();
        return response()->json($specialities);
    }
    public function get(){
        $id = request()->route("id");
        $speciality = Speciality::find($id);
        return response()->json($speciality);
    }
}