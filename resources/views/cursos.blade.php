@extends ('layouts/layout')

@section('title', 'Bienvenido a la plataforma Educativa del I.A.A.C')

@section('content')

  <div class="col-md-12 col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4>Piloto Comercial de Avión con Habilitación de Vuelo por Instrumentos</h4>
        <p class="card-description">Curso a distancia</p>
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home-1" role="tab" aria-controls="home-1" aria-selected="true">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile-1" role="tab" aria-controls="profile-1" aria-selected="false">Modalidad</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact-1" role="tab" aria-controls="contact-1" aria-selected="false">Contacto</a>
          </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane fade show active" id="home-1" role="tabpanel" aria-labelledby="home-tab">
            <div class="media">
              
              <div class="media-body">
                <h4 class="mt-0">Introducción</h4>
                <p>
                      En la siguiente plataforma educativa, usted accederá al curso de Piloto Comercial con Habilitación
                      de Vuelo por Instrumentos, el cual cuenta con 13 materias a desarrollarse a lo largo del curso. 
                      Usted encontrará la bibliografía a estudiar, trabajos prácticos que deberá entregar y, parciales y 
                      exámenes (multiple-choise) que deberá resolver en un tiempo determinado. Al final de la cursada, 
                      se encontrará con trabajos prácticos que integrarán todo lo estudiado.
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
            <div class="media">

              <div class="media-body">
                <h4 class="mt-0">Online (a distancia)</h4>
                <p>
                      Este curso a sido diseñado para realizarse de forma online (a distancia), y deberá contar siempre
                      con una conexión a internet básica para acceder a la plataforma. Tanto los parciales como los exámenes
                      finales se corregirán automáticamente. Mientras que los trabajos prácticos serán corregidos por un 
                      instructor a designar.
                </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
            <h4>Contacto</h4>
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
      <form class="text-center" action="/materias_pca">
          <button type="submit" class="btn btn-outline-info btn-fw" onclick="/materias_pca">Ingresar</button>
        </form><br>
    </div>
  </div>
 

@endsection