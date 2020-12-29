<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exam;
use App\Tp;
use App\User;

class AnacController extends Controller
{
    //




    public function index()
    {



        $users =  User::all();


        return view('anac', compact('users'));
    }
}
