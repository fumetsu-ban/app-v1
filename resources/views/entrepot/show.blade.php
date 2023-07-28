@extends('base')
@section('titre')
    {{$titre}}
@endsection

@section('main')
<ul>
    <li>Libelle : {{$entrepot->libelle}} </li>
    <li>Adresse : {{$entrepot->adresse}}</li>
    <li>Capacite max : {{$entrepot->capacite_max}}</li>
    <li>Type : {{$entrepot->type}}</li>
</ul>
@endsection