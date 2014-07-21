@extends('templates.layouts.default')

@section('content')
  <section id="main-body" class="row">
    <div class="parent-page-title col-md-12">
      <h1>မှတ်ပုံတင်ရန်</h1>
    </div>
    <div class="main-content col-md-9">
    @include('users.forms.login-form')
    </div>
    <div class="main-sidebar col-md-3">
      <ul class="sub-page">
        <li><a href="{{ action('UserController@getLogin') }}" class="active">ဝင်ရန်</a></li>
        <li><a href="{{ action('UserController@getRegister') }}">မှတ်ပုံတင်ရန်</a></li>
      </ul>
    </div>
  </section>
@stop