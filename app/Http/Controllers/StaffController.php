<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\listing;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $list = listing::distinct()->get(["negeri"]);
        return view('staff.formstaffs', ['list' => $list]);
    }

    public function findCities(Request $request)
    {
        $data['cities'] = listing::where("negeri",$request->negeri)->distinct()->get(["negeri", "daerah"]);
        $data['cities'] = listing::where("negeri",$request->negeri)->distinct()->get(["daerah"]);
        return response()->json($data);
    }

    public function findSchools(Request $request)
    {
        $data['schools'] = listing::where("sekolah",$request->sekolah)->get(["negeri","sekolah"]);
        $data['schools'] = listing::where("daerah",$request->daerah)->get(["sekolah"]);
        return response()->json($data);
    }

    public function tableS()
    {
        return view('staff.tablestaff');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
