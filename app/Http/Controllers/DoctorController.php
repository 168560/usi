<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctor;
use App\Http\Requests;
use App\Appointment;

class DoctorController extends Controller
{
    //
    public function show(){
        $doctors = Doctor::all();
        return response()->json($doctors);
    }
    public function get(){
        $id = request()->route("id");
        $doctor = Doctor::find($id);
        return response()->json($doctor);
    }
    public function getAppointments(){
        $id = request()->route("id");
        $doctor = Doctor::find($id);
        $appointments = $doctor->appointments;
        return response()->json($appointments);
    }
    public function delete(){
        $id = request()->route("id");
        Doctor::destroy($id);
        return response()->json(array('id' => $id));
    }
    public function getAppointment(){
        $id = request()->route("id");
        $id2 = request()->route("id2");
        $result = Appointment::where(array(array('id', intval($id2)),array('DOCTOR_id', intval($id))))->get()[0];
        return response()->json($result);
    }
    public function getBySpeciality(){
        $id = request()->route("id");
        $result = Doctor::where(array(array('SPECIALITY_id', intval($id))))->get();
        return response()->json($result);
    }
}
