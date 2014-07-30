@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>Faq ပြင်ရန်</h1>
  </div>
  <div class="main-content col-md-12">
  {{ Form::model($faq, array('action' => array('FaqController@postEdit', $faq->id))) }}
    @include('faqs.form')
  {{ Form::close() }}
  </div>
</section>

@stop