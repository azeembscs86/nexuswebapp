@extends('layouts.header')

@section('content')
    

	<div class="span12">
    
	<div class="well well-small">
		<h1>Check Out <small class="pull-right">  @if(Session::get('cart')) {{Session::has('cart')? Session::get('cart')->totalQty :' '}} Items are in the cart @endif </small></h1>
	<hr class="soften"/>	

	<table class="table table-bordered table-condensed">
              <thead>
                <tr>
                  <th>Product</th>
                  <th>Description</th>		   
                  <th>Unit price</th>
                  <th>Qty </th>
                  <th>Total</th>
				</tr>
              </thead>
              <tbody>
                
                  @if(Session::get('cart'))
                  @foreach($products as $product)
                  <tr>
                  <td><img width="100" src="{{asset('public/'.$product['item']['product_image'])}}" alt=""></td>
                  <td>{{$product['item']['product_name']}}</td>    
                  <td>${{$product['item']['product_price']}}</td>
                  <td>
					<input class="span1" style="max-width:34px" placeholder="1" id="appendedInputButtons" size="16" type="text" value="{{$product['qty']}}">
				  <div class="input-append">
					<button class="btn btn-mini" type="button">-</button><button class="btn btn-mini" type="button"> + </button><button class="btn btn-mini btn-danger" type="button"><span class="icon-remove"></span></button>
				</div>
				</td>
                  <td>{{$product['price']}}</td>
                </tr>
                @endforeach
                @else
                <tr>
                    <td><p><strong>No Product Avaliable in your Cart</strong></p></td>
                </tr>
                @endif
		@if(Session::get('cart'))		
                <tr>
                  <td colspan="6" class="alignR">Total Price:	</td>
                  <td> ${{$totalPrice}}</td>
                </tr>
                @endif
                 
		
				</tbody>
            </table><br/>
		
		<a href="{{url('/')}}" class="shopBtn btn-large"><span class="icon-arrow-left"></span> Continue Shopping </a>
            
				
	

</div>
</div>




@endsection