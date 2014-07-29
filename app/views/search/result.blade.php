@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>ရှာရန်</h1>
  </div>
  <div class="search-result main-content col-md-12">

  	<div class="search-box">
	  	{{ Form::open(array('url' => 'search', 'method' => 'GET')) }}
	  		<div class="form-group">
	  			{{ Form::text('query', $query, array('class' => 'form-control', 'placeholder' => 'Search')) }}
	  		</div>
	  		{{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
	  	{{ Form::close() }}
  	</div>
  	<hr>
  	@if($query)
      <h3>Result</h3>
	    @if($results->count())
			@foreach ($results as $result)
				<article class="blog-wrap">
					<p class="blog-date">{{ $result->created_at->format('d F Y') }}</p>
				  <h1 class="blog-title"><a href="{{ route('blogSingle', array($result->slug) ); }}">{{ $result->title }}</a></h1>
				  <h4 class="blog-author">by <a href="{{ route('profile', array($result->user['profile_url'])) }}">{{ $result->user['username'] }}</a></h4>
				  <p class="blog-excerpt">{{ $result->excerpt }}</p>
			  </article>
			@endforeach
			{{ $results->links() }}
		@else
			<h3>မည်သည့် ရလဒ်မှရှာမတွေ့ပါ ။</h3>
		@endif
    @else
        <div class="alert alert-warning" role="alert">စကားလုံးတစ်လုံး အနည်းဆုံးလိုအပ်ပါတယ်</div>
    @endif
  </div>
</section>

@stop