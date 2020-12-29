@extends ('layouts/layout')

@section('title', 'Aquí encontrará todos los módulos a desarrollar en la cursada')

@section('content')

<div class="col-md-12 col-xl-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4>Legislación y Documentación Aeronáutica</h4>
                  <p class="card-description">Módulo 1</p>
                  <ul class="nav nav-pills nav-pills-success" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="btn btn-info" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Inicio</a>
                    </li>
                    <li class="nav-item">
                      <a class="btn btn-info" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contacto</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                      <div class="media">

                        <div class="media-body">
                          <h5 class="mt-0">Introducción</h5>
                          <p>
                              En este primer módulo veremos todas las reglas que rigen a la actividad aeronáutica, como restricciones en espacio aéreo, derechos de paso, infraestructura, código aeronáutico, 
                              atribuciones del personal en vuelo, entre otros temas.
                            </p>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <p>
                        Cualquier duda o incoveniente, no dude en contactarnos.
                      </p>
                      <p>
                        <i class="mdi mdi-phone text-info"></i>
                        +54 9 11 5849-5510
                      </p>
                      <p>
                        <i class="mdi mdi-email-outline text-success"></i>
                        info@iaac.com.ar
                      </p>
                    </div>
                  </div>
                </div>
                <form class="text-center" action="/legislacion_pca">
                    <button type="submit" class="btn btn-outline-info btn-fw" onclick="/materias_pca">Empezar</button>
                  </form><br>
              </div>
            </div>

@endsection