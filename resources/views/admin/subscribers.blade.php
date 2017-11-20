<div class="row admin-content">
	<div class="container">

		<h2 class="sharubati-title blue">Subscribers</h2>
        @if(  isset($sub) && $sub->isNotEmpty()   )
	        @foreach($sub as $value )

			<div class="blog-card">
				<h3 class="sharubati-title">{{$value->email}}</h3>
				<p class="gray-text sharubati-text">{{$value->created_at->diffForHumans()}}</p>
			</div>
			@endforeach
		@else
		<p>No subscribers yet</p>
        @endif
		

	</div>
</div>
