@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Order bewerken</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('tafels.index') }}"> terug</a>
      </div>
  </div>
</div>
@isset($order)
    <a class="btn btn-primary" href="{{ route('orders.Order_lines.create',['order' => $order->id]) }}"> Regel Toevoegen</a>
    @isset($order->order_lines)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Naam</th>
                        <th scope="col">Prijs</th>
                        <th scope="col">Aantal</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
            <tbody>
            @foreach ($order->order_lines as $order_line)

            <tr>
                <th>{{$order_line->name}}</th>
                <td>{{$order_line->amount * $order_line->price}}</td>
                <td>{{$order_line->amount}}</td>
                {{-- <td><a href={{route('products.show', ['product' => $product->id])}}>Bekijken</a></td> --}}
            </tr>
            @endforeach
            </tbody>
        </table>

        @else
            <p> Er zijn geen doelen</p>
        @endif


        <form action="{{route('orders.update',['order' => $order->id])}}" method="POST"> 
            @csrf
            @method('PUT')
            <div class="col-xs-12 text-center">
                <input type="hidden" value=0 name="open">
                <button type="submit" class="btn btn-danger">Sluit order</button></div>                                               
        </form> 
@endisset
@endsection