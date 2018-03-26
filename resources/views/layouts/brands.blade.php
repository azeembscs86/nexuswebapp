
<div class="well well-small">
	<ul class="nav nav-list">
            @foreach($brands as $brand)
		<li><a href=""><span class="icon-chevron-right"></span>{{ $brand->brand_name}}</a></li>
            @endforeach    
		<li style="border:0"> &nbsp;</li>
		
	</ul>
</div>

		