@extends ('layouts/layout')

@section('title', 'Trabajo Práctico')

@section('content')





<div class="card-body">
  <h4 class="card-title">Medium Modal</h4>
  <p class="card-description">Normal modal with default bootstrap settings</p>
  <!-- Dummy Modal Starts -->
  <div class="modal demo-modal">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close cc_pointer">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="mb-0">Modal body text goes here.</p>
        </div>
        <div class="modal-footer cc_cursor">
          <button type="button" class="btn btn-success cc_pointer">Submit</button>
          <button type="button" class="btn btn-light">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Dummy Modal Ends -->
  <!-- Modal starts -->
  <div class="text-center">
    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal-2">Click for
      demo<i class="mdi mdi-play-circle ml-1 cc_pointer"></i></button>
  </div>
  <div class="modal fade cc_cursor" id="exampleModal-2" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel-2" style="display: none;" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content cc_cursor">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel-2">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body cc_cursor">
          <p class="mb-0 cc_cursor">Modal body text goes here.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success">Submit</button>
          <button type="button" class="btn btn-light cc_pointer" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Ends -->
</div>






@endsection