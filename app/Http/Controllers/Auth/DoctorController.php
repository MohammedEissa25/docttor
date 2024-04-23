<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\LoginRequest;

use Carbon\Carbon;
class DoctorController extends Controller
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
            'specialization'=> 'in:جراحة سمنة ومناظير,جراحة عامة,جراحة عمود فقري,جراحة قلب وصدر,جراحة مخ واعصاب,جهاز هضمي ومناظير,حساسية ومناعة,حقن مجهري واطفال انابيب,ذكورة وعقم,روماتيزم
            ,سكر وغدد صماء,سمعيات,صدر وجهاز تنفسي,طب الأسرة,طب المسنين,طب تقويمي,علاج الآلام,علاج طبيعي واصابات ملاعب,جلدية
            ,اسنان,نفسي,اطفال وحديثي الولادة,مخ واعصاب,عظام,نساء وتوليد,انف واذن وحنجرة,قلب واوعية دموية,الآشعة التداخلية,امراض دم,اورام,باطنة,تخسيس وتغذية,جراحة اطفال
            ,جراحة أورام,جراحة اوعية دموية,جراحة تجميل,عيون,كبد,كلى,مراكز أشعة,مسالك بولية,معامل تحاليل,ممارسة عامة,نطق وتخاطب',
            
        ]);
       
        $age=Carbon::parse($request->birthDate)->age;
        $file = $request->file('image'); //uploaded file object
        $image = $file->store('doctors_images', [
            'disk' => 'public'
        ]);
        $file2 = $request->file('certification'); //uploaded file object
        $certification = $file2->store('doctors_certification', [
            'disk' => 'public'
        ]);
        Doctor::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobileNumber'=>$request->mobileNumber,
            'birthDate'=>$request->birthDate,
            'age'=>$age,
            'specialization'=> $request->specialization,
            'image'=> $image,
            'certification'=> $certification,
            'province'=>$request->province,
            'city'=>$request->city,
        ]);

    

        return redirect()->route('register')->with('succed', 'تم تسجيل طلبك وسيتم التواصل معك في أقرب وقت');
        
    }
    
    protected $guard='doctor';
    public function login(LoginRequest $request)
    {
        
        $request->authenticate($this->guard);

        $request->session()->regenerate();
        
        return redirect()->intended(RouteServiceProvider::DOCTOR);
    
    }
}
