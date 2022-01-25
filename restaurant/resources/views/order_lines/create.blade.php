@extends('layouts.app')

@section('content')

<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Order bewerken</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('orders.edit',['order' => $order->id]) }}"> terug</a>
      </div>
  </div>
</div><br>

 <form method="POST" action="{{route('orders.Order_lines.store',['order' => $order->id])}}">
    @csrf
    <div class="form-group row">
      <label for="amount" class="col-sm-2 col-form-label">Aantal:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="amount">
      </div>
    </div>

    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6">
            <div class="form-group">
            <label for="name">Product:</label>
                <select class="form-select"  name="product_id">
                <option selected>Select een product</option>
                    @if(@isset($products))
                        @foreach($products as $product)
                            <option value={{$product->id}}>{{$product->name}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
        </div>
    </div>

    <input type="submit" value="Opslaan">
  </form>
  @endsection