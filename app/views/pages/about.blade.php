@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>ကျွနု်ပ်တို့အကြောင်း</h1>
  </div>
  <div class="main-content col-lg-9">
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
	proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <div class="main-sidebar col-lg-3">
    <ul class="sub-page">
    	<li><a href="{{ route('homePage') }}">Home</a></li>
    	<li><a href="{{ route('aboutPage') }}" class="active">About Us</a></li>
    </ul>
  </div>
</section>

@stop