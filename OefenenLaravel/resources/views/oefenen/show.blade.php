@extends('layouts.app')

@section('content')
    <h1>Hallo</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$ofenen->id}}</h5>
            <p>{{$ofenen->name}}</p>
        </div>
    </div>
@endsection
