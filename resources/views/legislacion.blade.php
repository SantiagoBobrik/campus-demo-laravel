@extends ('layouts/layout')

@section('title', "Legislación y Documentación Aeronáutica")

@section('content')




<div class="row">
  <div class="col-12">
    <div class="row d-flex justify-content-center">
      <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card cc_cursor">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Examen final</h4>
            <div class="d-flex justify-content-between">
              <p class="text-muted">Estado:</p>
              @if ($exam != null)
              @if ($exam->result >= 70)

              <label class="badge badge-success cc_cursor">Aprobado</label>
              <label class="badge badge-success cc_cursor">{{$exam->result}}%</label>
              @else
              <label class="badge badge-danger cc_cursor">Desaprobado</label>
              <label class="badge badge-danger cc_cursor">{{$exam->result}}%</label>
              @endif
              @else
              <label class="badge badge-secondary cc_cursor">Sin resolver</label>

              @endif
            </div>

          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card cc_cursor {{$recuperatorioPanel}}">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Recuperatorio</h4>
            <div class="d-flex justify-content-between">
              <p class="text-muted">Estado:</p>




              @if ($examRecup != null)
              @if ($examRecup->result > 60)

              <label class="badge badge-success cc_cursor">Aprobado</label>
              <label class="badge badge-success cc_cursor">{{$examRecup->result}}%</label>
              @else
              <label class="badge badge-danger cc_cursor">Desaprobado</label>
              <label class="badge badge-danger cc_cursor">{{$examRecup->result}}%</label>
              @endif
              @else
              <label class="badge badge-secondary cc_cursor">Sin resolver</label>

              @endif


            </div>

          </div>
        </div>
      </div>

      <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card cc_cursor">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Trabajo practico</h4>
            <div class="d-flex justify-content-between">
              <p class="text-muted">Estado:</p>

              @if ($tp != null)

              <label class="badge badge-success cc_cursor">Entregado</label>
              @else
              <label class="badge badge-danger cc_cursor">Sin entregar</label>
              @endif
            </div>

          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<div class="row portfolio-grid d-flex justify-content-center">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">
    <a href="/bibliografia_legislacion_pca">
      <figure class="effect-text-in">
        <img class="mt-0 p-1" src="{{asset('images/svg-action-panel/recuperatorio.svg')}}" alt="image">
        <figcaption>
          <h4>Bibliografía</h4>
          <p>Ingrese para empezar a estudiar los temas de la materia</p>
        </figcaption>
      </figure>
    </a>
  </div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12">

    <a data-toggle="modal" data-target="#exampleModal-1" href="/tp">
      <figure class="effect-text-in">
        <img class="mt-3 p-2" src="{{asset('images/svg-action-panel/tp2.svg')}}" alt="image">
        <figcaption>
          <h4>Trabajo Práctico</h4>
          <p>Ingrese para realizar el trabajo práctico de la materia</p>
        </figcaption>
      </figure>
  </div>
  </a>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 {{$final}}">
    <div data-toggle="modal" data-target="#exampleModal-2">
    <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-2">¡ATENCIÓN!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <p class="mb-0">Si continuas iniciarás el exámen final.<br><br>
                            Recuerda:<br>
                            <ul>
                              <li>Deberás responder 20 preguntas de opción múltiple.</li>
                              <li>Tendrás 30 minutos para realizar el exámen.</li>
                              <li>Solo cuentas con una oportunidad.</li>
                            </ul>
                          </p>
                        </div>
                        <div class="modal-footer">
                        <form action="/legislacion_pca_exa_final">
                          <button type="submit" class="btn btn-danger">Continuar</button>
                        </form>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
      <figure class="effect-text-in">
        <img class="mt-2 p-2" src="{{asset('images/svg-action-panel/examen.svg')}}" alt="image">
        <figcaption>
          <h4>Examen Final</h4>
          <p>Ingrese para rendir el exámen final de toda la materia</p>
        </figcaption>
      </figure>
    </div>
  </div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-12 {{$recuperatorio}}">
  <div data-toggle="modal" data-target="#exampleModal-3">
    <div class="modal fade" id="exampleModal-3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-3" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-3">¡ATENCIÓN!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="mb-0">Si continuas iniciarás el recuperatorio del exámen final.<br><br>
                          Recuerda:<br>
                          <ul>
                            <li>Deberás responder 20 preguntas de opción múltiple.</li>
                            <li>Tendrás 30 minutos para realizar el exámen.</li>
                            <li>Solo cuentas con una oportunidad.</li>
                          </ul>
                          </p>
                        </div>
                        <div class="modal-footer">
                        <form action="/recuperatorio">
                          <button type="submit" class="btn btn-danger">Continuar</button>
                        </form>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
      <figure class="effect-text-in">
        <img class="mt-2 p-2" src="{{asset('images/svg-action-panel/examen.svg')}}" alt="image">
        <figcaption>
          <h4>Recuperatorio del Exámen Final</h4>
          <p>Ingrese para rendir el recuperatorio de toda la materia</p>
        </figcaption>
      </figure>
    </div>
  </div>

  <form method="POST" action="/send-archive" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="modal fade cc_cursor" id="exampleModal-1" tabindex="-1" role="dialog"
      aria-labelledby="exampleModalLabel-1" style="display: none;" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content cc_cursor">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel-1">Cargar trabajo practico</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body cc_cursor">



            <div class="form-group">
              <label>Subir archivo</label>
              <input type="file" name="archive" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                <span class="input-group-append">
                  <button class="file-upload-browse btn btn-sm btn-primary cc_pointer" type="button">Subir</button>
                </span>
              </div>
            </div>

            <div class="form-group">
              <label for="exampleTextarea1">Comentarios</label>
              <textarea name="comment" class="form-control" id="exampleTextarea1" rows="5"></textarea>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">Enviar</button>
            <button type="button" class="btn btn-light cc_pointer" data-dismiss="modal">Cancelar</button>

          </div>

        </div>
      </div>
    </div>
  </form>



  @endsection