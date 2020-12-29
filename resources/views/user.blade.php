@extends ('layouts/layout')

@section('title', "Perfil")

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <div>
                        <tr>
                            <th>Curso</th>
                            <th>Tp</th>
                            <th>Examen Final</th>
                            <th>Recuperatorio</th>
                        </tr>
                    </div>
                    <div>
                        <tr>
                            <td>PCA</td>

                            @if ($user->tp != null)
                            <td><label class="badge badge-success cc_cursor">Entregado</label></td>
                            @else
                            <td><label class="badge badge-danger cc_cursor">Sin entregar</label></td>
                            @endif

                            @foreach ($user->exam as $exam)
                            @if ($exam->type == 1 && $exam->result >= 70)
                                    <td><label class="badge badge-success cc_cursor">Aprobado</label>
                                    <label class="badge badge-success cc_cursor">{{$exam->result}}%</label></td>
                                @elseif ($exam->type == 1 && $exam->result < 70)
                                    <td><label class="badge badge-danger cc_cursor">Desaprobado</label>
                                    <label class="badge badge-danger cc_cursor">{{$exam->result}}%</label></td>
                                @endif
                            @endforeach

                            @foreach ($user->exam as $exam)
                                @if ($exam->type == 2 && $exam->result >= 70)
                                    <td><label class="badge badge-success cc_cursor">Aprobado</label>
                                    <label class="badge badge-success cc_cursor">{{$exam->result}}%</label></td>
                                @elseif ($exam->type == 2 && $exam->result < 70)
                                    <td><label class="badge badge-danger cc_cursor">Desaprobado</label>
                                    <label class="badge badge-danger cc_cursor">{{$exam->result}}%</label></td>
                                @endif
                            @endforeach

                        </tr>
                    </div>            
                </table>
            </div>
        </div>
    </div>
</div>


@endsection