<div id="sidebar" class="span3">
<div class="well well-small">
	<ul class="nav nav-list">
		@foreach($categories as $category)
		<li><a href=""><span class="icon-chevron-right"></span>{{$category->cat_name}}</a></li>
            @endforeach  <li style="border:0"> &nbsp;</li>
		
	</ul>
</div>		  
			
	@include('layouts.brands')		

	</div>
