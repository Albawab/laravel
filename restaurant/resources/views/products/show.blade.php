@extends('layouts.app')

@section('content')
    <h1>Product</h1>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$product->id}}</h5>
            <p>{{$product->name}}</p>
            <p>{{$product->price}}</p>
        </div>
    </div>
@endsection
