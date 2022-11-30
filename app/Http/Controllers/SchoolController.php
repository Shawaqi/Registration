<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\{Present,Npresent,listing};

class SchoolController extends Controller
{
    public function index()
    {
        return view('school.tableschool');
    }

    public function dashboard()
    {
        return view('school.chart');
    }

    public function dataP()
    {
        return view('school.tableP');
    }

    public function dataM()
    {
        return view('school.tableM');
    }

    public function dataS()
    {
        return view('school.tableS');
    }

    public function search(Request $request)
    {
        Present::where('date' >= $date)->get();
        Npresent::where('date' >= $date)->get();
        return view('school.chart');
    }

    
}
