<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addview()
    {
        return view('admin.add_doctor');
    }

    public function  upload(Request $request)  {
        $doctor=new doctor;

        $image=$request->file;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->file->move('doctorimage',$imagename);
        $doctor->image=$imagename;

        $doctor->name=$request->name;
        $doctor->phone=$request->number;
        $doctor->email=$request->email;
        $doctor->room=$request->room;
        $doctor->speciality=$request->speciality;

        $doctor->save();
        return redirect()->back()->with('message','Doctor Added Successfully');
    }
}
