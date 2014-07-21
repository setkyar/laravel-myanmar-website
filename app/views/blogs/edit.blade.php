@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>ဘလော့ဂ် ပြင်ရန်</h1>
  </div>
  <div class="main-content col-md-12">
  {{ Form::model($blog, array('url' => array('blog/edit', $blog->id))) }}
    @include('blogs.form')
  {{ Form::close() }}
  </div>
</section>

@stop