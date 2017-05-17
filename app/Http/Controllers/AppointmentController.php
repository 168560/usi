<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Appointment;
use App\Http\Requests;

class AppointmentController extends Controller
{
    public function delete(){
        $id = request()->route("id");
        Appointment::destroy($id);
        return response()->json(array('id' => $id));
    }
    public function show(){
        $appointments = Appointment::all();
        return response()->json($appointments);
    }
    public function get(){
        $id = request()->route("id");
        $appointment = Appointment::find($id);
        return response()->json($appointment);
    }
}