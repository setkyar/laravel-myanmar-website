@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>Search</h1>
  </div>
  <div class="faq-content main-content col-md-12">
	<div class="search-box">
	  	{{ Form::open(array('route' => 'faqSearch', 'method' => 'GET')) }}
	  		<div class="form-group {{ isset($query) ? 'has-error' : '' }}">
	  			{{ Form::text('query', $query , array('class' => 'form-control', 'placeholder' => 'Search by Error, Question or Answer')) }}
	  		</div>
	  		{{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
	  	{{ Form::close() }}
  	</div>
  	<hr>
    @if($query)
      <h3>Result</h3>
  	   @include('faqs.loop')
    @else
        <div class="alert alert-warning" role="alert">စကားလုံးတစ်လုံး အနည်းဆုံးလိုအပ်ပါတယ်</div>
    @endif
  </div>
</section>

@stop