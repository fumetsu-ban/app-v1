@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')

<div class="col-md-10 content right-div">
    

    <div class="col-md-6 mx-auto my-5 shadow-lg p-3 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('entrepot.store') }}"  enctype="multipart/form-data" >
            @csrf
            

                <div class="mb-3">
                    <label for="libelle" class="form-label">Libelle: </label>
                    <input value="{{old('libelle')}}" type="text" name="libelle" class="form-control" >
                </div>
               
                <div class="mb-3">
                    <label for="adresse" class="form-label">Adresse: </label>
                    <input value="{{old('adresse')}}" type="text" name="adresse" class="form-control" >
                </div>
                
                <div class="mb-3">
                    <label for="capacite_max" class="form-label">Capacite_max: </label>
                    <input value="{{old('capacite_max')}}" type="text" name="capacite_max" class="form-control" >
                </div>
                
                <div class="mb-3">
                    <label for="type" class="form-label">Type: </label>
                    {{-- <input value="{{old('type')}}" type="text" name="type" class="form-control" > --}}
                    <select class="form-control" aria-label="Default select example" name="type">
                        <option selected>Open this select menu</option>
                        <option value="dipo">Depot</option>
                        <option value="magazin">Magazin</option>
                    </select>
                </div>
                
            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
</div>

@endsection