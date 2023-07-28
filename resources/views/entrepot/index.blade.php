@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')

  <div class="container mt-5">
    <div class="row">
      <div class="col-md-8 offset-md-auto mx-auto">
        <form action="{{ route('entrepot') }}" method="GET" class="form-inline">
          @csrf
          <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search by name or adresse">
            <div class="input-group-append">
              <button class="btn btn-outline-primary" type="submit">
                {{-- Search --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                  <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
              </button>
            </div>
            <div class="input-group-append">
              <a class="btn btn-outline-success" href="{{ url('/entrepot/create') }}">
                {{-- Add --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                  <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                </svg>
              </a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-12 mx-auto px-5">
      
        <table class="table table-striped table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Libelle</th>
            <th>Adresse</th>
            <th>Capacite Max</th>
            <th>Type</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <!-- Replace this part with dynamic data from your backend -->
          @foreach ($entrepot as $e)
              <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->libelle}}</td>
                <td>{{$e->adresse}}</td>
                <td>{{$e->capacite_max}}</td>
                <td>{{$e->type}}</td>
                <td>
                  
                  <a href="{{ url('entrepot/'.$e->id.'/show') }}" class="btn btn-outline-info btn-sm ">
                    {{-- <img src="{{ asset('storage/images/info.png') }}"  class="rounded-circle " style="width: 20px;height: 20px;"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                      <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                      <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                    </svg>
                  </a>
                  <a href="{{ url('entrepot/'.$e->id.'/edit') }}" class="btn btn-warning btn-sm">
                    {{-- <img src="{{ asset('storage/images/pencil-square.svg') }}"  class="rounded-circle " style="width: 20px;height: 20px;"> --}}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                      <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                      <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                    </svg>
                  </a>
                    <form action="{{url('entrepot/'.$e->id.'/delete')}}" method="post" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Supprimer?')" class="btn btn-danger btn-sm">
                          {{-- <img src="{{ asset('storage/images/x-circle.svg') }}"  class="rounded-circle " style="width: 20px;height: 20px;"> --}}
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                          </svg>
                        </button>
                    </form>
                </td>
              </tr>
                
          @endforeach
          
          <!-- End of dynamic data -->
        </tbody>
      </table>
    </div>
  </div>

  
@endsection