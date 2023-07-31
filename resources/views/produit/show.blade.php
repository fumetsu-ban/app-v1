@extends('base')
@section('titre')
    {{$titre}}
@endsection

@section('main')
<div class="container">
    <div class="row">
<div class="col-4">
<div class="wrapper">
    <!-- Card 2 -->
    <div class="card front-face">
       <img src="{{asset('storage/'.$produit->photo)}}">
    </div>
    <div class="card back-face">
       <img src="{{asset('storage/'.$produit->photo)}}">
       <div class="info">
          <div class="title">
             𝐇𝐀𝐋𝐋𝐔'𝐒 𝐖𝐎𝐑𝐋𝐃
          </div>
          <p>
             Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          </p>
          <ul class="list-group list-group-flush">
             <li class="list-group-item">An item</li>
             <li class="list-group-item">A second item</li>
             <li class="list-group-item">A third item</li>
             <li class="list-group-item">A fourth item</li>
          </ul>
       </div>
       <ul>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab-brands fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
       </ul>
    </div>
 </div>
</div>
<div class="col-4">
    <div class="wrapper">
        <!-- Card 2 -->
        <div class="card front-face">
           <img src="{{asset('storage/'.$produit->photo)}}">
        </div>
        <div class="card back-face">
           <img src="{{asset('storage/'.$produit->photo)}}">
           <div class="info">
              <div class="title">
                 𝐇𝐀𝐋𝐋𝐔'𝐒 𝐖𝐎𝐑𝐋𝐃
              </div>
              <p>
                 Lorem ipsum dolor sit, amet consectetur adipisicing elit.
              </p>
              <ul class="list-group list-group-flush">
                 <li class="list-group-item">An item</li>
                 <li class="list-group-item">A second item</li>
                 <li class="list-group-item">A third item</li>
                 <li class="list-group-item">A fourth item</li>
              </ul>
           </div>
           <ul>
              <a href="#"><i class="fab fa-facebook-f"></i></a>
              <a href="#"><i class="fab-brands fa-twitter"></i></a>
              <a href="#"><i class="fab fa-instagram"></i></a>
              <a href="#"><i class="fab fa-youtube"></i></a>
           </ul>
        </div>
     </div>
    </div>
 <div class="col-4">
 <div class="wrapper">
    <!-- Card 2 -->
    <div class="card front-face">
       <img src="{{asset('storage/'.$produit->photo)}}">
    </div>
    <div class="card back-face">
       <img src="{{asset('storage/'.$produit->photo)}}">
       <div class="info">
          <div class="title">
            {{$produit->libelle}}
          </div>
          <p>
             Lorem ipsum dolor sit, amet consectetur adipisicing elit.
          </p>
          <ul class="list-group list-group-flush">
             <li class="list-group-item">Produit : {{$produit->libelle}}</li>
             <li class="list-group-item">Prix : {{$produit->prix}}</li>
             <li class="list-group-item">A third item</li>
             <li class="list-group-item">A fourth item</li>
          </ul>
       </div>
       <ul>
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab-brands fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
       </ul>
    </div>
 </div>
</div>
</div>
</div>
@endsection
{{-- 
<ul>
    <li>Libelle : {{$produit->libelle}} </li>
    <li>Prix : {{$produit->prix}}</li>
    <li>Capacite max : {{$produit->capacite_max}}</li>
    <li>Type : {{$produit->type}}</li>
</ul>
 --}}
