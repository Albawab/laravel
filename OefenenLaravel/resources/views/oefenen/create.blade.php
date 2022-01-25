@extends('layouts.app')

@section('content')
<h1>Nieuwe Oefenen</h1>

<form method="POST" action="{{route('oefenen.store')}}">
    @csrf
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="name">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Start</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="start" placeholder="date">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">End</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="end" placeholder="date">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">start datum</label>
      <div class="col-sm-10">
        <input type="datetime-local" class="form-control" name="start_time" placeholder="datetime">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">end datum</label>
      <div class="col-sm-10">
        <input type="datetime-local" class="form-control" name="end_time" placeholder="datetime">
      </div>
    </div>

    <input type="submit" value="Opslaan">
  </form>
  @endsection