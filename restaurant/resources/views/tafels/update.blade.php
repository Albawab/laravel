@extends('layouts.app')

@section('content')
    @if(@isset($tafel))       
        <form method="POST" action="{{route('tafels.update',['tafel'=> $tafel->id])}}">
            @csrf <!--              <-----------------------------------------------\> مهم جدا-->
            @method('PUT')<!--              <-----------------------------------------------\> مهم جدا-->
            <div class="form-group">
                <label for="number_of_guest">Aantal stoelen</label>
                <input type="number" class="form-control" name="number_of_guest" placeholder="{{$tafel->number_of_guest}}">
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