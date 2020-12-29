@extends ('layouts/layout')

@section('title', 'Iniciado Exámen Final de Legislación y Documentación Aeronáutica.')

@section('content')

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">

      <div class="col-12 d-flex justify-content-between">
        <h4>Responda todas las preguntas</h4><br>
        <div class="d-flex">
          <h1 class="mb-1 mr-1 font-weight-bold mb-2"><i class="mdi mdi-clock"> </i></h1>
          <h1 style="margin-top:1.4px " id="time" class="mb-3  font-weight-bold mb-2"> 30:00</h1>


        </div>
      </div>

      <div class="accordion accordion-filled" id="accordion-3" role="tablist">


        <form id="form-examen" method="POST" action="/check-exam" enctype="multipart/form-data">
          {{csrf_field()}}



          @foreach ($questions as $question)


          <div class="card border-bottom">
            <div class="card-header" role="tab" id="heading-7">
              <h5 class="mb-0">
                <a data-toggle="collapse" href="#collapse-{{$loop->index}}" aria-expanded="false"
                  aria-controls="collapse-7" class="collapsed">
                  {{$question->name}}


                </a>
              </h5>
            </div>
            <div id="collapse-{{$loop->index}}" class="collapse" role="tabpanel" aria-labelledby="heading-7"
              data-parent="#accordion-3" style="">
              <div class="card-body">
                <ol type="a">
                  @foreach ($question->options as $option)
                  <li><input type="radio" name="{{$question->name}}" value="{{$option->id}}"> {{$option->name}}</li>
                  @endforeach
                </ol>
              </div>
            </div>
          </div>

          @endforeach


                  <!-- Modal starts -->
                  <div class="text-center">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal-2">Finalizar exámen</button>
                  </div>
                  <div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2" style="display: none;" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel-2">Finalizar Exámen</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p class="mb-0">¿Estás seguro que quieres finalizar el exámen?</p>
                        </div>
                        <div class="modal-footer">
                          <form action="/check-exam">
                            <button type="submit" class="btn btn-danger">Finalizar</button>
                          </form>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Modal Ends -->
                </div>
              </div>
            </div>


  

      </div>
    </div>
  </div>
</div>


<script>
  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    let form =  document.querySelector('#form-examen');
    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        localStorage.setItem('time', minutes + ":" + seconds);
        localStorage.setItem('minutes', minutes);
        localStorage.setItem('seconds', seconds);


        display.textContent = localStorage.getItem('time');

     
        if (--timer < 0) {
        form.submit();
        localStorage.removeItem(time);
        }
    }, 1000);
}

window.onload = function () {

  
    var fiveMinutes = 60 * 30,
    display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>
@endsection