@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>ဖိုရမ်</h1>
  </div>
  <div class="main-content col-md-9">
	<p>ဒီ Feature ကို Develop လုပ်နေတုန်းဖြစ်ပါတယ်။ ဒီ ဝဘ်ဆိုက်ရဲ့ Development ပိုင်းမှာကူညီချင်တယ်ဆိုရင်တော့ Source Code ကို <a href="http://github.com/laravel-myanmar/website" target="_blank">Github</a> မှာ ရရှိနိုင်ပါတယ်</p>
  </div>
  <div class="main-sidebar col-md-3">
    <ul class="sub-page">
    	<li><a href="{{ route('homePage') }}">Home</a></li>
    	<li><a href="{{ route('aboutPage') }}">About Us</a></li>
    </ul>
  </div>
</section>

@stop