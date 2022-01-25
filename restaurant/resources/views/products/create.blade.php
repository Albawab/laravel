@extends('layouts.app')

@section('content')
<h1>Nieuwe Product</h1>

<form method="POST" action="{{route('products.store')}}">
    @csrf
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="name">
      </div>
    </div>

    <div class="form-group row">
      <label for="description" class="col-sm-2 col-form-label">Omschrijven:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="description" placeholder="description">
      </div>
    </div>

    <div class="form-group row">
      <label for="price" class="col-sm-2 col-form-label">Prijs:</label>
      <div class="col-sm-10">
        <input type="decimal" class="form-control" name="price" placeholder="price">
      </div>
    </div>

    <input type="submit" value="Opslaan">
  </form>
  @endsection