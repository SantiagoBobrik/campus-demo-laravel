<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth;

use App\Exam;
use App\Tp;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //


    public function menu()
    {


        $user = auth()->user();
        $exam = Exam::orderBy('created_at', 'DESC')->where('user_id', $user->id)->where('type', 1)->first();
        $examRecup = Exam::orderBy('created_at', 'DESC')->where('user_id', $user->id)->where('type', 2)->first();
        $tp = Tp::orderBy('created_at', 'DESC')->where('user_id', $user->id)->first();




        $recuperatorio = 'd-none';
        $recuperatorioPanel = 'd-none';

        $final =  'd-block';
        if ($exam  != null) {
            if ($exam->result < 60) {

                $recuperatorioPanel = 'd-block';
                $recuperatorio = 'd-block';
                $final = 'd-none';

                if ($examRecup  != null) {
                    $recuperatorio = 'd-none';
                }
            } else {
                $final =  'd-none';
            }
        }




        return view('legislacion', compact('exam', 'examRecup', 'tp', 'recuperatorio', 'recuperatorioPanel', 'final'));
    }


    public function sendArchive(Request $req)

    {

        $user = auth()->user();
        $tp = new Tp();
        $tp->comment = $req['comment'];
        $tp->user_id = $user->id;
        $path = $req->file("archive")->store('public');
        $nombreArchivo = basename($path);
        $tp->archive = $nombreArchivo;

        $tp->save();

        return redirect('/legislacion_pca');
    }
}
