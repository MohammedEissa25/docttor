<?php

namespace App\Http\Controllers\Front;

use App\Models\User;
use App\Models\Doctor;
use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DoctorController extends Controller
{

    public function index()
    {
        $patients = Booking::where('doctor_id',auth('doctor')->user()->id)->pluck('user_id');
        $patients = User::whereIn('id', $patients)->get();


        return view('Front.doctor',compact('patients'));
    }
    public function search(Request $request)
    {
       // dd($request);
        $doctors = Doctor::orderBy('id', 'asc')->paginate(10);
        if($request->city != null)
        {
            $doctors = $doctors->where('city', $request->city);
        }
        if($request->specialist != null)
        {
            $doctors = $doctors->where('specialization', $request->specialist);
        }

        return view('Front.searchData',compact('doctors'));

    }
    public function doctorDetails($id)
    {
        $doctor = Doctor::find($id);

        return view('Front.doctorDetails', compact('doctor'));
    }

    public function booking($doctor)
    {
        $patient = auth()->user()->id;
        $doctor = Doctor::find($doctor);

        $booking = Booking::create([
            'user_id'=>$patient,
            'doctor_id'=>$doctor->id,
        ]);

        if($booking)
            return redirect()->route('patiant');
        return redirect()->back()->with('faild',trans('faildMessageText'));
    }
}
