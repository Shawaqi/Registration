<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\studentform;

class ParentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('register.formparents');
    }

    public function tableP()
    {
        $user = User::where('id', auth()->user()->id)->get();
        return view('register.tableparent')->with(['user' => $user]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::where('id' , auth()->user()->id)->update([
            'name' => $request->fp_name,
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
            'fname2' => $request->fp_name2,
            'mname2' => $request->sp_name2,
            'sname2' => $request->tp_name2,
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

        // foreach($request->students as $student)
        // $user = User::where(user()->studentform()->id)->get();

        // {
        //     studentform::create([
        //         'user_id' => $user->id,
        //         'fname' => $student->fs_name,
        //         'mname' => $student->ss_name,
        //         'sname' => $student->ts_name,
        //         'races' => $student->s_races,
        //         'gender' => $student->s_gender,
        //         'ic' => $student->ic_student,
        //         'phone' => $student->sno_tel,
        //         'birthday' => $student->s_dob,
        //         'email' => $student->s_email,
        //         'state' => $student->s_state,
        //         'ppd' => $student->s_city,
        //         'school' => $student->s_school,
        //     ]);
        // }



        return view('register.storeparent');

        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $list)
    {
        $user = User::where('id', auth()->user()->id)->get();
        // return view('register.edit')->with(['user' => $user]);
        return view('register.edit' , compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
    //     $request->validate([
    //         'name' => 'required',
    //         'mname' => 'required',
    //         'sname' => 'required',
    //         'email' => 'required',
    //     ]);

    //     $list->update([
    //         'name' => $request->name,
    //         'mname' => $request->mname,
    //         'sname' => $request->sname,
    //         'email' => $request->email,
    //     ]);

    //     return view('register.tableparent');

        $request->validate([

            'name' => 'required',
            'mname' => 'required',
            'sname' => 'required',
            'email' => 'required',

            ]);

            $list = User::find($id);
            $list->name = $request->name;
            $list->mname = $request->mname;
            $list->sname = $request->sname;
            $list->email = $request->email;
            $list->save();

            return redirect()->route('register.tableparent')
            ->with('success','Company Has Been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $list)
    {
        $user->delete();
        return view('register.tableparent');
    }
}

