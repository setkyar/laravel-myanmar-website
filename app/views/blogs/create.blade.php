@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>ဘလော့ဂ် တင်ရန်</h1>
  </div>
  <div class="main-content col-lg-12">
  {{ Form::model($blog = null, array('url' => 'blog/create')) }}
    @include('blogs.form')
  {{ Form::close() }}
  </div>
</section>

@stop