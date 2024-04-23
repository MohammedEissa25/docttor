<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Pharmacist;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;
use Carbon\Carbon;

class PharmacistController extends Controller
{     
    public function store(Request $request)
    {

     $request->validate([
          'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|confirmed|min:8',
            'mobileNumber' => 'required|string|',
            'certification' => 'required',
            'image' => 'required',
            'province'=>'required',
            'city'=>'required',
            
        ]);
       
        $age=Carbon::parse($request->birthDate)->age;
        $file = $request->file('image'); //uploaded file object
        $image = $file->store('pharmacist_images', [
            'disk' => 'public'
        ]);
        $file2 = $request->file('certification'); //uploaded file object
        $certification = $file2->store('pharmacist_certification', [
            'disk' => 'public'
        ]);
        Pharmacist::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobileNumber'=>$request->mobileNumber,
            'birthDate'=>$request->birthDate,
            'age'=>$age,
            'image'=> $image,
            'certification'=> $certification,
            'province'=>$request->province,
            'city'=>$request->city,
        ]);

    

        return redirect()->route('register')->with('succed', 'تم تسجيل طلبك وسيتم التواصل معك خلال أسبوع');
        
    }
    // protected function uploadimage(Request $request,$name){
          
    //         $file = $request->file($name); //uploaded file object
    //         $path = $file->store('uploads', [
    //             'disk' => 'public'
    //         ]);
    //         return $path;
        
    // }
    protected $guard='pharmacist';
    public function login(LoginRequest $request)
    {
        
        $request->authenticate($this->guard);

        $request->session()->regenerate();
        
        return redirect()->intended(RouteServiceProvider::PHARMACIST);
        
    }
}
