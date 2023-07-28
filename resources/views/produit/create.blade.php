@extends('base')
@section('titre')
    {{ $titre }}
@endsection
@section('main')

<div class="col-md-10 content right-div">
    

    <div class="col-md-6 mx-auto my-5 shadow p-3 ">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form method="post" action="{{ route('produit.store') }}"  enctype="multipart/form-data" >
            @csrf
                
            <div class="mb-3">
                <label for="libelle" class="form-label">Libelle: </label>
                <input value="{{old('libelle')}}" type="text" name="libelle" class="form-control" >
            </div>
           
            <div class="mb-3">
                <label for="prix" class="form-label">Prix: </label>
                <input value="{{old('prix')}}" type="text" name="prix" class="form-control" >
            </div>
            
            <div class="mb-3">
                <label for="photo" class="form-label">Photo: </label>
                <input type="file" name="photo" class="form-control" >
            </div>
            
        <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
</div>

@endsection