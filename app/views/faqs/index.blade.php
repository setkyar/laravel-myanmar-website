@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>FAQs</h1>
    <p>Laravel လေ့လာသူများ မကြာခနမေးလေ့ရှိသော မေးခွန်းများကို အဖြေများနှင့်တစ်ကွ အလွယ်တကူ ကြည့်ရှုနိုင်ပါတယ်</p>
  </div>
  <div class="faq-content main-content col-md-12">
	<div class="search-box">
	  	{{ Form::open(array('route' => 'faqSearch', 'method' => 'GET')) }}
	  		<div class="form-group">
	  			{{ Form::text('query', '' , array('class' => 'form-control', 'placeholder' => 'Search by Error, Question or Answer')) }}
	  		</div>
	  		{{ Form::submit('Search', array('class' => 'btn btn-primary')) }}
	  	{{ Form::close() }}
  	</div>
  	<hr>
  	<h3>Latest FAQs</h3>
  	@include('faqs.loop')
  </div>
</section>

@stop