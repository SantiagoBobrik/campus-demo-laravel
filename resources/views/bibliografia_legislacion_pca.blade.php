@extends ('layouts/layout')

@section('title', 'Bibliografia de la materia Legislación y Documentación Aeronáutica.')

@section('content')

<div class="row">
<div class="col-lg-6 grid-margin ">
              <div class="card">
                <div class="card-body">
                  <h4>Biblografía</h4>
                  <div class="mt-4">
                    <div class="accordion" id="accordion" role="tablist">
                      <div class="card border-bottom">
                        <div class="card-header" role="tab" id="heading-1">
                          <h6 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-1" aria-expanded="false" aria-controls="collapse-1" class="">
                              Código Aeronáutico
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-1" class="collapse" role="tabpanel" aria-labelledby="heading-1" data-parent="#accordion" style="">
                          <div class="card-body">

                              <div class="col-9">
                                <a href="https://drive.google.com/open?id=1pjxHI7JKUacu4fVkym7VsYK1R5IOnAoR" target="_blank">Leer</a>                        
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card border-bottom">
                        <div class="card-header" role="tab" id="heading-2">
                          <h6 class="mb-0">
                            <a class="collapsed" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                              Manual de Derecho Aeronáutico
                            </a>
                          </h6>
                        </div>
                        <div id="collapse-2" class="collapse" role="tabpanel" aria-labelledby="heading-2" data-parent="#accordion" style="">
                          <div class="card-body">
                          <div class="col-9">
                                <a href="https://drive.google.com/open?id=1unSTkVeV-sJX9qGc9D8UFp6b4gdD584G" target="_blank">Leer</a>                        
                              </div>
                          </div>
                        </div>
                      </div>                
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4>Videos</h4>
                  <div class="mt-4">
                        <iframe width="100%" height="250px" src="https://www.youtube.com/embed/r_X56t3h0Bw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
   
                </div>
              </div>
            </div>
</div>

@endsection