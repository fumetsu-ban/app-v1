@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')

<div class="container mt-5">
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="{{ route('entrepot') }}" method="GET" class="form-inline">
        @csrf
        <div class="input-group mb-3">
          <input type="text" name="search" class="form-control" placeholder="Search by name or adresse">
          <div class="input-group-append">
            <button class="btn btn-outline-primary" type="submit">Search</button>
          </div>
          <div class="input-group-append">
            <a class="btn btn-outline-success" href="{{ url('/entrepot/create') }}">Add</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

<table class="table table-striped">
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
              {{-- <a href="#" class="btn btn-info btn-sm">Show</a> --}}
              <a href="{{ url('entrepot/'.$e->id.'/edit') }}" class="btn btn-primary btn-sm">Edit</a>
                <form action="{{url('entrepot/'.$e->id.'/delete')}}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Supprimer?')" class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
          </tr>
             
      @endforeach
      
      <!-- End of dynamic data -->
    </tbody>
  </table>


@endsection