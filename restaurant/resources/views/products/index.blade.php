@extends('layouts.app')

@section('content')
<h6><a href="{{url()->current()}}/create">Product Toevoegen.</a></h6>
{{-- @guest
<h1>Inloggen</h1>
@else

<h1>Hallo {{Auth::user()->name}}</h1>
@endguest --}}
<h1>Products</h1>

<form method="get" action="{{route('search')}}">
    @csrf
    <div class="input-group">
        <div class="form-outline">
        <input type="text" id="q" name="q" class="form-control" placeholder="Zoeken"/>
        </div>
        <button type="submit" class="btn btn-primary" value="zoek">Zoek
        </button>
    </div>
</form>
  

@if(isset($products))                   
            @foreach($products as $product)
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Product

                    <form style="display:inline" action="{{ route('products.destroy', $product->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <span>-</span>  

                        <!-- this delete the item -->
                        <button type="submit" title="delete" style="border: none; background-color:transparent;" class="ml-7">
                            <i class="fas fa-trash fa-lg text-danger">Verwijderen</i>

                        </button>
                    </form>




                    @guest
                        @else
                        <form style="display:inline" action="{{ route('products.destroy', $product->id) }}" method="POST">
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
                  <h5 class="card-title">Prijs: {{$product->price}} </h5>
                  <p class="card-text">Omschrijven: {{$product->description}}</p><br>

                  @guest
                  @else   
                    <a href="{{ route('products.edit', $product->id) }}" class="pl-5">
                        <i class="fas fa-edit  fa-lg">Bewerken</i>
                    </a>
                @endguest
                <p>-</p>
                <a href="{{ route('products.create') }}" class="pl-5">
                    <i class="fas fa-edit  fa-lg">Creeren</i>
                </a>

                </div>
              </div>
            @endforeach
        @else    
            <h1>Loading...</h1>
        
        @endif
@endsection