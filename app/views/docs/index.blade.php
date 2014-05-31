@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>အသုံးပြုနည်းများ</h1>
  </div>
  <div class="documentation-content main-content col-lg-9">
	{{ $content }}
  </div>
  <div class="documentation-sidebar main-sidebar col-lg-3">
    {{ $toc }}
  </div>
</section>

@stop