<?php

namespace App\Http\Controllers;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function doctorappointment()
    {
        if(Auth::id())
        {

            $appoint=appointment::where('doctor')->get();
            return view('doctor.mypaitent',compact('appoint'));
        }
        else{
            return redirect()->back();
        }
    }
}
