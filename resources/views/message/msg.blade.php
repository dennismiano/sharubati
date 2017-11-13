<div  class="msg_div">
@if( isset($msg) && $msg->isNotEmpty())
	@foreach($msg as $value)
      <div>
	     time:{{$value->created_at->diffForHumans()}}<br>
	     name:{{$value->name}}<br>
		 email:{{$value->email}}<br>
		 phone_no:{{$value->phone_no}}<br>
		 message:{{$value->message}}<br>
		 <button type="button" class="" id="{{$value->id}}">Reply</button>
	  </div>
    @endforeach
@else
	<p>No messages to display</p>
@endif
	
</div>