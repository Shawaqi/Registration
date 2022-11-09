<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('Signed in');
        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',

        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
        $user = User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),

      ]);


      $user->assignRole($data['role']);

      return $user;

    }

    public function dashboard()
    {
        if(Auth::check()){
            $user = auth()->user();
                if($user->hasRole('merchant'))
                    {
                        return view('merchant.formmerchants');
                    }

                    elseif($user->hasRole('parent'))
                    {
                        return view('register.formparents');
                    }

                    elseif($user->hasRole('staff'))
                    {
                        return view('staff.formstaffs');
                    }

                    elseif($user->hasRole('school'))
                    {
                        return view('school.tableschool');
                    }
        }

            return redirect("login")->withSuccess('You are not allowed to access');



    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }

    public function store()
    {
        $user = User::where('id' , auth()->user()->id)->update([
            'fname' => $request->fp_name,
            'mname' => $request->sp_name,
            'sname' => $request->tp_name,
            'email' => $request->p_email,
            'relationship' => $request->relationship,
            'ic' => $request->p_ic,
            'passport' => $request->passport,
            'birthday' => $request->pdob,
            'phone' => $request->p_phone,
            'altphone' => $request->pa_phone,
            'gender' => $request->p_gender,
            'races' => $request->p_races,
            'address1' => $request->p_address1,
            'address2' => $request->p_address2,
            'state' => $request->p_state,
            'relationship2' => $request->relationship2,
            'ic2' => $request->p_ic2,
            'passport2' => $request->passport2,
            'birthday2' => $request->pdob2,
            'phone2' => $request->p_phone2,
            'altphone2' => $request->pa_phone2,
            'gender2' => $request->p_gender2,
            'races2' => $request->p_races2,
            'faddress' => $request->p_address12,
            'saddress' => $request->p_address22,
            'state2' => $request->p_state2,
            'consent' => $request->consent,
            'gaji' => $request->gaji,
            'password' => bcrypt('password')
        ]);

        foreach($request->studentform as $student)
        {
            studentform::create([
                'user_id' => $user->id,
                'fname' => $student->fs_name,
                'mname' => $student->ss_name,
                'sname' => $student->ts_name,
                'races' => $student->s_races,
                'gender' => $student->s_gender,
                'ic' => $student->ic_student,
                'phone' => $student->sno_tel,
                'birthday' => $student->s_dob,
                'email' => $student->s_email,
                'state' => $student->s_state,
                'ppd' => $student->s_city,
                'school' => $student->s_school,
            ]);
        }

        return 'mai dah';
    }
}
