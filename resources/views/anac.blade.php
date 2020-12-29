@extends ('layouts/layout')

@section('title', "Estadisticas Anac")

@section('content')


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Curso</th>
                            <th>Materia</th>
                            <th>Detalle</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($users as $user)


                        <tr>
                            <td>{{$user->name}}</td>
                            <td>PCA</td>
                            <td>Legislacion</td>
                            <td>
                                <a href="/user/{{$user->id}}">
                                    <div class="badge badge-pill badge-primary"><i
                                            class="mdi mdi-account-search display-5 p-2"></i>
                                    </div>
                                </a>
                            </td>


                        </tr>


                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection