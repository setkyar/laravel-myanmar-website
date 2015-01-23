@extends('templates.layouts.default')

@section('content')

<style type="text/css">
    .search {
        width: 100%;
    }
</style>

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>Search</h1>
  </div>
  <div class="faq-content main-content col-md-12">
	<div class="search-box">
	  	{{ Form::open(array('route' => 'faqSearch', 'method' => 'GET')) }}
	  		<div class="form-group col-md-10 {{ (strlen($query) == 0) ? 'has-error' : '' }}">
	  			{{ Form::text('query', $query , array('class' => 'form-control', 'placeholder' => 'Search by Error, Question or Answer')) }}
	  		</div>
        <div class="col-md-2">
	  		{{ Form::submit('Search', array('class' => 'btn btn-primary search')) }}
        </div>
	  	{{ Form::close() }}
  	</div>
    <div class="col-md-12">
    <hr>
        @if($query)
          <h3>Result</h3>
      	   @include('faqs.loop')
        @else
            <div class="alert alert-warning" role="alert">စကားလုံးတစ်လုံး အနည်းဆုံးလိုအပ်ပါတယ်</div>
        @endif
    </div>
  </div>
</section>

@stop