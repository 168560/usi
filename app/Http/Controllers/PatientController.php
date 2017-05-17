<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;
use App\Http\Requests;

class PatientController extends Controller
{
    public function delete(){
        $id = request()->route("id");
        Patient::destroy($id);
        return response()->json(array('id' => $id));
    }
    public function show(){
        $patients = Patient::all();
        return response()->json($patients);
    }
    public function get(){
        $id = request()->route("id");
        $patient = Patient::find($id);
        return response()->json($patient);
    }
    public function getAppointments() {
        $id = request()->route("id");
        $patient = Patient::find($id);
        return response()->json($patient->appointments()->getResults());
    }
    public function getAppointment() {
        $id = request()->route("id");
        $id2 = request()->route("id2");
        $result = Appointment::all()->where('PATIENT_id', intval($id))->where('id', intval($id2));
        return response()->json($result->current());
    }
}