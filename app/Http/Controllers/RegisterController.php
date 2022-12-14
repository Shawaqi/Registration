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

        return redirect("login")->with('danger','Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mname' => '',
            'sname' => 'required',
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
        'mname' => $data['mname'],
        'sname' => $data['sname'],
        'role' => $data['role'],
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
}
