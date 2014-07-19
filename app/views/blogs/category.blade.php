@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>
  </div>
  <div class="main-content col-lg-9">
    @include('blogs.loop')
  </div>
  @include('templates.sidebar.blog')
</section>

@stop