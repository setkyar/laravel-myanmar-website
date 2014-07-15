@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>ဘလော့ဂ်</h1>
  </div>
  <div class="main-content col-lg-9">
  	<article class="blog-wrap">
  		<p class="blog-date">{{ $blog->created_at->format('d F Y') }}</p>
		  <h1 class="blog-title"><a href="{{ route('blogSingle', array($blog->slug) ); }}">{{ $blog->title }}</a></h1>
		  <h4 class="blog-author">by <a href="#">Hein Zaw Htet</a></h4>
		  <div class="blog-content">
		  	{{ $blog->content }}
		  </div>
    </article>
  </div>
  <div class="main-sidebar col-lg-3">
  	<h6 class="sidebar-title">Categories</h6>
    <ul class="sub-page">
    	<li><a href="#">Announcement</a></li>
    	<li><a href="#">Tutorials</a></li>
    	<li><a href="#">Reviews</a></li>
    	<li><a href="#">News</a></li>
    </ul>
    <h6 class="sidebar-title">Versions</h6>
    <ul class="sub-page">
    	<li><a href="#">4</a></li>
    	<li><a href="#">3</a></li>
    </ul>
  </div>
</section>

@stop