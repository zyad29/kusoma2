@extends('layouts.appDetail')

@section('title')
       Services 
@endsection

@section('contenu')

      <h1>Détail du produit</h1>
      <hr>
      <img style="width: 20%" class="img-fluid" src="/storage/produit_images/{{$produit->product_image}}" alt="Colorlib Template">
      <h2>Nom : {{$produit->product_name}}</h2>
      <h3>Prix : {{$produit->product_price}}$</h3>
      <p>{{$produit->description}}</p>
      <hr>
      <h4>{{$produit->created_at}}</h4>
      
      

@endsection

