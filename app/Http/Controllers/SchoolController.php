<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
