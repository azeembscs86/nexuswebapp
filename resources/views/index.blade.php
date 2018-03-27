@extends('layouts.header')

@section('content')
@include('layouts.categories')
    
<div class="span9">
	<div class="well np">
		<div id="myCarousel" class="carousel slide homCar">
            <div class="carousel-inner">
			  <div class="item">
                <img style="width:100%" src="{{ asset('public/assets/img/bootstrap_free-ecommerce.png') }}" alt="bootstrap ecommerce templates">
                
              </div>
			  <div class="item">
                <img style="width:100%" src="{{ asset('public/assets/img/carousel1.png') }}" alt="bootstrap ecommerce templates">
                
              </div>
			  <div class="item active">
                <img style="width:100%" src="{{ asset('public/assets/img/carousel3.png') }}" alt="bootstrap ecommerce templates">
                
              </div>
              <div class="item">
                <img style="width:100%" src="{{ asset('public/assets/img/bootstrap-templates.png') }}" alt="bootstrap templates">
                
              </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
          </div>
        </div>
<!--
New Products
-->
	<div class="well well-small">
	<h3><a class="btn btn-mini pull-right" href="" title="View more">VIew More<span class="icon-plus"></span></a> Products  </h3>
	<hr class="soften"/>
		
		<div class="row-fluid">
		  <ul class="thumbnails">
                      @foreach($products as $product)
                      <li class="span4" style="width: 30.914894%;margin-left:none">
			  <div class="thumbnail">
				 
				<a class="zoomTool" href="" title="add to cart"><span class="icon-search"></span> QUICK VIEW</a>
				<a href=""><img src="{{ asset('public/'.$product->product_image) }}" alt=""></a>
				<div class="caption cntr">
					<p>{{$product->product_name}}</p>
					<p><strong> ${{$product->product_price}}</strong></p>
					<h4><a class="shopBtn" href="{{route('product.addToCart',['id'=>$product->product_id])}}" title="add to cart"> Add to cart </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#"> Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			@endforeach
			
		  </ul>
		</div>
	</div>
	<!--
	Featured Products
	-->
		
	
	
	<hr>
	
	</div>



@endsection