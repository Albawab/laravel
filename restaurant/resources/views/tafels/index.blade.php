@extends('layouts.app')

@section('content')

{{-- @guest
<h1>Inloggen</h1>
@else

<h1>Hallo {{Auth::user()->name}}</h1>
@endguest --}}
<h1>Tafels</h1>
@if(isset($tafels))                   
            @foreach($tafels as $tafel)
                @if($tafel->orders->where('open', 1)->first() != null)
                        <a class="btn btn-primary" href="{{ route('orders.show', ['order' => $tafel->orders->where('open', 1)->first()->id]) }}"> Bewerk order</a>                      
                        
                @endif
                
                <form action="{{route('orders.store')}}" method="Post"> 
                    @csrf
                    <div class="col-xs-12 text-center">
                        <input type="hidden" value="{{$tafel->id}} " name="tafel_id">
                        <button type="submit" class="btn btn-primary">Maak nieuwe order</button></div>                                               
                </form>


            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Tafel
                    @guest
                        @else
                        <form style="display:inline" action="{{ route('tafels.destroy', $tafel->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <span>-</span> 
                            <button type="submit" title="delete" style="border: none; background-color:transparent;" class="ml-7">
                                <i class="fas fa-trash fa-lg text-danger">Verwijderen</i>
                            </button>
                        </form>
                    @endguest

                </div>
                <div class="card-body">
                  <h5 class="card-title">Aantel stoelen: {{$tafel->number_of_guest}} </h5>
                  <p class="card-text">Omschrijven: {{$tafel->description}}</p><br>

                  @guest
                  @else   
                    <a href="{{ route('tafels.edit', $tafel->id) }}" class="pl-5">
                        <i class="fas fa-edit  fa-lg">Bewerken</i>
                    </a>
                @endguest

                </div>
              </div>
            @endforeach
        @else   
        
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('tafels.index') }}">Tafels</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('products.index') }}">Products</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link disabled" href="#">Disabled</a>
                </li>
              </ul>
            </div>
          </nav>


            <img src="{{URL('storage/home-image.jpg')}}" alt="Home page">        
        @endif
@endsection