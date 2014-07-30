@if($faqs->count())
	<div class="faq-list panel-group" id="accordion">
	@foreach ($faqs as $faq)
		<div class="panel panel-default">
	    <div class="panel-heading">
	      <h4 class="panel-title">
	        <a data-toggle="collapse" data-parent="#accordion" href="#{{ $faq->slug }}">
	          {{ $faq->question }} <p class="author">submited by <a href="{{ route('profile', array($faq->user['profile_url'])) }}">{{ $faq->user->username }}</a></p>
	        </a>
	      </h4>
	    </div>
	    <div id="{{ $faq->slug }}" class="panel-collapse collapse">
	      <div class="panel-body">
	        {{ Markdown::text($faq->answer) }}
	      </div>
	    </div>
  	</div>
	@endforeach
</div>
{{ $faqs->links() }}
@else
	<h3>မည်သည့် Faq မရှိသေးပါ။</h3>
@endif