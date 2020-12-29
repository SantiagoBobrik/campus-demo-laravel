<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Monolog\Handler\FirePHPHandler;
use App\Question;
use App\Option;
use App\Exam;
use PhpParser\Node\Stmt\Foreach_;

class ExamController extends Controller
{
    //

    public $questionController;

    public function __construct(QuestionController $questionController)
    {

        $this->questionController = $questionController;
    }




    public function exam()
    {
        //instanciamos el usuario actual
        $user = auth()->user();
        //buscamos un examen con el id del usuario
        $exam =  Exam::where('user_id', '=', $user->id)->exists();




        //si no hay examen lo dejamos hacerlo
        if (!$exam) {
            $questions =  $this->questionController->all();
            return view('legislacion_pca_exa_final_preguntas', compact('questions'));
        } else {
            return redirect('legislacion_pca');
        }
    }



    public function recuperatorio()
    {
        //instanciamos el usuario actual
        $user = auth()->user();
        //buscamos un examen con el id del usuario
        $exam =  Exam::where('user_id', '=', $user->id)->where('type', '=', 1)->first();


        //si no hay examen lo dejamos hacerlo
        if ($exam != null) {
            if ($exam->result < 70) {
                $questions =  $this->questionController->allRecup();
                return view('recuperatorio', compact('questions'));
            } else {
                return redirect('legislacion_pca');
            }
        }
    }

    public function checkExam(Request $req)
    {

        $user = auth()->user();
        $exam =  Exam::where('user_id', '=', $user->id)->exists();

        $correctas = 0;
        $incorrectas = 0;
        $seleccionadas = [];

        //traigo el total de las preguntas del examen, hoy es uno pero en un futuro desde el formulario traeriamos el examen id
        $totalPreguntas =  Question::where('exam_id', 1)->count();
        //recorro todas  las respuestas que vienen del formulario

        if (!$exam) {
            $incorrectas = $totalPreguntas;


            foreach ($req->request as $respuesta) {

                //busco la opcion elegida





                if (strlen($respuesta) < 11) {



                    $option =  Option::find($respuesta);

                    //chequeo que exista o no

                    if ($option != null) {

                        //si la opcion elegida tiene el campo correct en 1 sumo a respuestas correctas
                        if ($option->correct == 1) {

                            $correctas++;
                            $incorrectas--;
                        }

                        array_push($seleccionadas, $option->id);
                    }
                }
            }





            //total del examen -- intval convierte el float a int redondeando. 
            $total = intval($correctas / $totalPreguntas * 100);




            /* -------------- Creo un registro con el resultado del examen -------------- */

            $exam  = new Exam();
            $exam->result = $total;
            $exam->user_id = $user->id;
            $exam->type = 1;
            $exam->save();


            /* ------------------------------------ x ----------------------------------- */

            $questions =  $this->questionController->all();

            return view('result', compact('total', 'incorrectas', 'correctas', 'questions', 'seleccionadas'));
        } else {
            return redirect('legislacion_pca');
        }
    }



    public function checkExamRecup(Request $req)
    {

        $user = auth()->user();
        $exam =  Exam::where('user_id', '=', $user->id)->where('type', '=', 2)->exists();

        $correctas = 0;
        $incorrectas = 0;
        $seleccionadas = [];

        //traigo el total de las preguntas del examen, hoy es uno pero en un futuro desde el formulario traeriamos el examen id
        $totalPreguntas =  Question::where('type', 2)->count();
        //recorro todas  las respuestas que vienen del formulario

        if (!$exam) {
            $incorrectas = $totalPreguntas;


            foreach ($req->request as $respuesta) {

                //busco la opcion elegida





                if (strlen($respuesta) < 11) {



                    $option =  Option::find($respuesta);

                    //chequeo que exista o no

                    if ($option != null) {

                        //si la opcion elegida tiene el campo correct en 1 sumo a respuestas correctas
                        if ($option->correct == 1) {

                            $correctas++;
                            $incorrectas--;
                        }

                        array_push($seleccionadas, $option->id);
                    }
                }
            }





            //total del examen -- intval convierte el float a int redondeando. 
            $total = intval($correctas / $totalPreguntas * 100);




            /* -------------- Creo un registro con el resultado del examen -------------- */

            $exam  = new Exam();
            $exam->result = $total;
            $exam->user_id = $user->id;
            $exam->type = 2;
            $exam->save();


            /* ------------------------------------ x ----------------------------------- */

            $questions =  $this->questionController->allRecup();

            return view('result', compact('total', 'incorrectas', 'correctas', 'questions', 'seleccionadas'));
        } else {
            return redirect('legislacion_pca');
        }
    }
}
