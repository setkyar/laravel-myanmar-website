@extends('templates.layouts.default')

@section('content')
  <section id="main-body" class="row">
    <div class="parent-page-title col-lg-12">
      <h1>စကားဝှက် ပြန်သတ်မှန်ရန်</h1>
    </div>
    <div class="main-content col-lg-9">
    <form action="{{ action('RemindersController@postReset') }}" method="POST">
      <div class="form-group">
        <input type="hidden" name="token" value="{{ $token }}">
      </div>
      <div class="form-group">
        <input type="email" name="email"  placeholder="Email" class="form-control">
      </div>
      <div class="form-group">
        <input type="password" name="password" placeholder="Password" class="form-control">
      </div>
      <div class="form-group">
        <input type="password" name="password_confirmation"  placeholder="Confirm Password" class="form-control">
      </div>
      <input type="submit" value="Reset Password" class="btn-primary btn">
    </form>
    </div>
    <div class="main-sidebar col-lg-3">
      <ul class="sub-page">
        <li><a href="{{ action('UserController@getLogin') }}" class="active">ဝင်ရန်</a></li>
        <li><a href="{{ action('UserController@getRegister') }}">မှတ်ပုံတင်ရန်</a></li>
      </ul>
    </div>
  </section>
@stop