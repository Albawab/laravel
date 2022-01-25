@extends('layouts.app')

@section('content')
<h1>Bewerken Oefenen</h1>

<form method="POST" action="{{route('oefenen.update',['oefenen'=> $oefenen->id])}}">

    @csrf
    @method('PUT')
    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="name" placeholder="name" value="{{$oefenen->name}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">Start</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="start" placeholder="date" value="{{$oefenen->start}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">End</label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="end" placeholder="date" value="{{$oefenen->end}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">start datum</label>
      <div class="col-sm-10">
        <input type="datetime-local" class="form-control" name="start_time" placeholder="datetime" value="{{ \Carbon\Carbon::parse($oefenen->start_time)->format('Y-m-d\TH:i')}}">
      </div>
    </div>

    <div class="form-group row">
      <label for="name" class="col-sm-2 col-form-label">end datum</label>
      <div class="col-sm-10">
        <input type="datetime-local" class="form-control" name="end_time" placeholder="datetime" value="{{ \Carbon\Carbon::parse($oefenen->end_time)->format('Y-m-d\TH:i')}}">
      </div>
    </div>

    <input type="submit" value="Bewerken">
  </form>

  <?php echo $oefenen->end_time; ?>
  @endsection