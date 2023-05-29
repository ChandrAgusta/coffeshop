@extends('templates.mainLayout')

@section('container')
      <div class="title mt-5 pt-5 mb-4" style="font-family: Bebas neue">
        <h1>Keranjang</h1>
      </div>

      <div class="card mb-5" style="max-width: 540px; font-family: Bebas neue;">
        <div class="row g-0 bg-dark text-light">
          <div class="col-md-2">
            <img src="img/profile.jpg" class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Agil Parisekit</h5>
              <p class="card-text">Ga pedes</p>
              <p class="card-text"><small class="text-muted">Gede Banget</small></p>
            </div>
          </div>
          </div>
        </div>

        {{-- <div class="card mb-5" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-2">
              <img src="img/profile.jpg" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title">Cappucino</h5>
                <p class="card-text">2 pcs</p>
                <p class="card-text"><small class="text-muted">Large</small></p>
              </div>
            </div>
            </div>
          </div>
        </div> --}}


      </div>
      

@endsection