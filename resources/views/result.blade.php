@extends ('layouts/layout')

@section('title', 'Resultados:')

@section('content')




<div class="row">
    <div class="col-12">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-sm-6 col-md-2 col-xl-2 grid-margin stretch-card cc_cursor">
                <div class="card">


                    @if ($total > 60)
                    <div class="card-body bg-success text-center">

                        <h4 class="card-title text-white">Aprobado</h4>
                        @else
                        <div class="card-body bg-danger text-center">
                            <h4 class="card-title text-white">Desaprobado</h4>
                            @endif

                            <h2 class=" text-white">{{$total}}%</h2>


                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-md-2 col-xl-2 grid-margin stretch-card cc_cursor">
                    <div class="card">
                        <div class="card-body bg-success text-center">
                            <h3 class="card-title text-white">Correctas:</h3>
                            <h2 class=" text-white">{{$correctas}}</h2>


                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-2 col-xl-2 grid-margin stretch-card cc_cursor">
                    <div class="card">
                        <div class="card-body bg-danger text-center">
                            <h3 class="card-title text-white">Incorrectas:</h3>
                            <h2 class=" text-white">{{$incorrectas}}</h2>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





    <div class="col-lg-12 grid-margin stretch-card">

        <div class="card-body">

            <div class="accordion accordion-filled" id="accordion-3" role="tablist">


                <form method="POST" action="/check-exam" enctype="multipart/form-data">
                    {{csrf_field()}}



                    @foreach ($questions as $question)


                    <div class="card border-bottom">
                        <div class="card-header" role="tab" id="heading-7">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-{{$loop->index}}" aria-expanded="true"
                                    aria-controls="collapse-7" class="collapse show">
                                    {{$question->name}}


                                </a>
                            </h5>
                        </div>
                        <div id="collapse-{{$loop->index}}" class="collapse show" role="tabpanel" aria-labelledby="heading-7"
                            data-parent="#accordion-3" style="">
                            <div class="card-body">
                                <ol type="a">
                                    @foreach ($question->options as $option)

                                    {{-- opcion correcta --}}
                                    @if ($option->correct == 1)


                                    {{-- si esta opcion se encuentra en las que selecicon el usuario "checked" --}}
                                    @if(in_array($option->id, $seleccionadas))

                                    <li><input disabled checked="checked" type="radio" name="{{$question->id}}">

                                        {{-- sino no checkeamos --}}
                                        @else

                                    <li><input disabled type="radio" name="{{$question->id}}">

                                        @endif


                                        {{-- resto del componente opcion --}}
                                        {{$option->name}}
                                        <div class="badge badge-pill badge-success cc_cursor"><i
                                                class="mdi mdi-check cc_cursor"></i></div>
                                    </li>




                                    {{-- opcion incorrecta --}}
                                    @else

                                    {{-- si esta opcion se encuentra en las que selecicon el usuario "checked" --}}
                                    @if(in_array($option->id, $seleccionadas))

                                    <li><input disabled checked="checked" type="radio" name="{{$question->id}}">

                                        {{-- sino no checkeamos --}}
                                        @else

                                    <li><input disabled type="radio" name="{{$question->id}}">

                                        @endif

                                        {{-- resto del componente opcion --}}
                                        {{$option->name}}
                                        <div class="badge badge-pill badge-danger cc_cursor"><i
                                                class="mdi mdi-close cc_cursor"></i></div>
                                    </li>


                                    @endif
                                    @endforeach
                                </ol>
                            </div>
                        </div>
                    </div>

                    @endforeach



                    <div class="col-12 text-center mt-5">

                        <button class="btn btn-primary w-50" type="submit">Continuar</button>
                    </div>
                </form>

            </div>
        </div>

    </div>




    @endsection