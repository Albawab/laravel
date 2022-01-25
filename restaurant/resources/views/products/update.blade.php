@extends('layouts.app')

@section('content')
    @if(@isset($product))       
        <form method="POST" action="{{route('products.update',['product'=> $product->id])}}">
            @csrf <!--              <-----------------------------------------------\> مهم جدا-->
            @method('PUT')<!--              <-----------------------------------------------\> مهم جدا-->
            <div class="form-group">
                <label for="name">Naam</label>
                <input type="text" class="form-control" name="name" placeholder="{{$product->name}}">
            </div>

            <div class="form-group">
                <label for="number_of_guest">Omschrijven</label>
                <input type="text" class="form-control" id="description" name="description">
            </div>
            <div class="form-group row">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Opslaan</button>
                </div>
              </div>
        </form>
    @endisset
@endsection