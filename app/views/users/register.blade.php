@extends('templates.layouts.default')

@section('content')
  <section id="main-body" class="row">
    <div class="parent-page-title col-lg-12">
      <h1>မှတ်ပုံတင်ရန်</h1>
    </div>
    <div class="main-content col-lg-9">
    @if($errors->has())
      @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
          {{ $error }}
        </div>
      @endforeach
    @endif
      {{ Form::model(null, array('action' => array('UserController@postRegister'))) }}
        <div class="form-group">
          {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'အီးမေးလ်')) }}
        </div>
        <div class="form-group">
          {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'နာမည်')) }}
        </div>
        <div class="form-group">
          {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်')) }}
        </div>
        <div class="form-group">
          {{ Form::password('confirm-password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်ပြန်ရိုက်ပါ')) }}
        </div>
        <div class="form-group input-group">
          <span class="input-group-addon">laravelmyanmar.com/profile/</span>
          {{ Form::text('profile_url', Input::old('profile_url'), array('class' => 'form-control', 'placeholder' => 'URL လိပ်စာ (အင်္ဂလိပ်လို)')) }}
        </div>
        <input type="submit" value="ဝင်ရန်" class="btn-primary btn-lg btn">
      {{ Form::close() }}
    </div>
    <div class="main-sidebar col-lg-3">
      <ul class="sub-page">
        <li><a href="login.html">ဝင်ရန်</a></li>
        <li><a href="register.html">မှတ်ပုံတင်ရန်</a></li>
      </ul>
    </div>
  </section>
@stop