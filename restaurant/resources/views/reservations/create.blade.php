@extends('layouts.app')
@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Reservering Toevoegen.</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('tafels.index') }}"> terug naar tafels.</a>
      </div>
  </div>
</div><br>

<form method="POST" action="{{route('reservations.store')}}">

  @csrf <!--              <-----------------------------------------------\> مهم جدا-->

  <div class="form-group">
    <label for="name">Naam:</label>
    <input type="text" class="form-control @error('title') is-invalid @enderror" name="name" id="name" placeholder="Naam">
  </div>

  @error('name')
      <div class="alert alert-danger">{{ $message }}</div>
  @enderror


  <div class="form-group">
    <label for="phone">Telefoonnummer:</label>
    <input type="tel" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" placeholder="Telefoonnummer">
  </div>

  @error('phone')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Email">
  </div>

  @error('email')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group">
    <label for="date">Datum:</label>
    <input type="date" class="form-control @error('date') is-invalid @enderror" name="date" id="date">
  </div>

  @error('date')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group">
    <label for="time">Time:</label>
    <input type="time" class="form-control @error('time') is-invalid @enderror" name="time" id="time">
  </div>

  @error('time')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

  <div class="form-group">
    <label for="number_of_persons">Nummers van personen:</label>
    <input type="number" class="form-control @error('number_of_persons') is-invalid @enderror" name="number_of_persons" id="number_of_persons">
  </div>

  @error('number_of_persons')
    <div class="alert alert-danger">{{ $message }}</div>
  @enderror

<br>

  <button type="submit" class="btn btn-primary">Opslaan</button>
</form>
@endsection