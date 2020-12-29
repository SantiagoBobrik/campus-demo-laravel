<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Question;

class QuestionController extends Controller
{
    //


    public function all()
    {

        $questions =  Question::where('type', 1)->get();

        return $questions;
    }


    public function allRecup()
    {

        $questions =  Question::where('type', 2)->get();
        return $questions;
    }
}
