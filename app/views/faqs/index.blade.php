@extends('templates.layouts.default')

@section('content')

<style type="text/css">
    .search {
        width: 100%;
    }
</style>

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>FAQs</h1>
    <p>Laravel လေ့လာသူများ မကြာခနမေးလေ့ရှိသော မေးခွန်းများကို အဖြေများနှင့်တစ်ကွ အလွယ်တကူ ကြည့်ရှုနိုင်ပါတယ်</p>
  </div>
  <div class="faq-content main-content col-md-12">
	<div class="search-box">
	  	{{ Form::open(array('route' => 'faqSearch', 'method' => 'GET')) }}
        
	  		<div class="form-group col-md-10">
	  			{{ Form::text('query', '' , array('class' => 'form-control', 'placeholder' => 'Search by Error, Question or Answer')) }}
	  		</div>
            <div class="col-md-2">
    	  		{{ Form::submit('Search', array('class' => 'btn btn-primary search')) }}
            </div>
	  	{{ Form::close() }}
  	</div>
    <div class="col-md-12">
      	<hr>
      	<h3>Latest FAQs</h3>
      	@include('faqs.loop')
    </div>
  </div>
</section>

@stop