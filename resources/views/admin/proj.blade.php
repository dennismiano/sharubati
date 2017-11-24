              <div class="col-md-8">
              @if( isset($proj) && $proj->isNotEmpty()  )
	                    @foreach($proj as $value)
						<div class="lead-holder">
							<h2 class="lead-name sharubati-title">{{$value->name}}</h2>
							<p class="sharubati-text">{{$value->email}}|{{$value->phone}}  </p>
							<p class="sharubati-text gray-text">{{$value->created_at->diffForHumans()}}</p>

							<p class="sharubati-text"><b>SERVICE:</b><span class="gray-text">{{$value->about}}</span></p>
							<p class="sharubati-text"><b>BUDGET:</b><span class="gray-text">{{$value->budget}}</span></p>
							<p class="sharubati-text"><b>DEADLINE:</b><span class="gray-text">{{$value->deadline}}</span></p>
						</div>
					 @endforeach
					
					@else

				@endif
			</div>