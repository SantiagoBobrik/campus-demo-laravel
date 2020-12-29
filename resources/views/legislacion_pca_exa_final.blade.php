@extends ('layouts/layout')

@section('title', 'Usted está por rendir el exámen final de Legislación y Documentación Aeronáutica')

@section('content')

<div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4>Exámen Final: Legislación y Documentación Aeronáutica</h4>
                  <p class="card-description">Usted está por rendir el exámen final de Legislación y Documentación Aeronáutica, que consta de 20 preguntas de opción múltiple (multiple-choise).<br>
                    Dispondrá de 30 minutos para realizarlo.<br>
                    Solo tendrá un intento para realizarlo, en caso de que tenga problemas de conexión, por favor, contactese.</p>
                  <!-- Dummy Modal Starts -->

                  <!-- Dummy Modal Ends -->
                  <!-- Modal starts -->
                  <div class="text-center">
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">Iniciar Exámen<i class="mdi mdi-play-circle ml-1"></i></button>
                  </div>
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: none;">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">ATENCIÓN!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="mb-0">Recuerde que una vez iniciado el exámen tendrá solo 30 minutos y solo dispondrá de una oportunidad.</p>
                        </div>
                        <div class="modal-footer">
                          <a href="/legislacion_pca_exa_final_preguntas"><button type="button" class="btn btn-success">Continuar</button></a>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Ends -->
                </div>
              </div>
            </div>

@endsection