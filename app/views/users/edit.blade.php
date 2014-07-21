@extends('templates.layouts.default')
@section('content')
<section id="main-body" class="profile-content row">
  <div class="parent-page-title col-md-12">
    <h1>Profile ပြင်ရန်</h1>
  </div>
  <div class="main-sidebar col-md-3">
  <div class="profile-gravatar">
    <img src="assets/img/1535734_10200320194646041_737002202_n.jpg">
  </div>
    <ul class="sub-page">
      <li><a href="{{ action('UserController@getProfile') }}">Profile ကြည့်ရန်</a></li>
      <li><a href="{{ action('UserController@getEdit') }}" class="active">Profile ပြင်ရန်</a></li>
    </ul>
  </div>
  <div class="main-content col-md-9">
  {{ Form::model($user, array('action' => array('UserController@postEdit'))) }}
        <div class="form-group">
      {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'နာမည်')) }}
      @if($errors->has())
        @foreach ($errors->get('username') as $error)
          <div class="alert alert-danger">
          {{ $error }}
          </div>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      {{ Form::text('job_position', Input::old('job_position'), array('class' => 'form-control', 'placeholder' => 'အလုပ်ရာထူး ')) }}
      @if($errors->has())
        @foreach ($errors->get('job_position') as $error)
          <div class="alert alert-danger">
          {{ $error }}
          </div>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      {{ Form::text('job_at', Input::old('job_at'), array('class' => 'form-control', 'placeholder' => 'လုပ်ငန်းနာမည် ')) }}
      @if($errors->has())
        @foreach ($errors->get('job_at') as $error)
          <div class="alert alert-danger">
          {{ $error }}
          </div>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      {{ Form::textarea('bio', Input::old('bio'), array('class' => 'form-control', 'placeholder' => 'ကိုယ့်အကြောင်း အတိုချုပ် ')) }}
      @if($errors->has())
        @foreach ($errors->get('bio') as $error)
          <div class="alert alert-danger">
          {{ $error }}
          </div>
        @endforeach
      @endif
    </div>
    <hr>
    <p class="alert alert-info">
      Password မပြင်ချင်ရင် Password Fileld ထဲ ဘာမှမထည့်ဘဲ ထားခဲ့ပါ။
    </p>
    <div class="form-group">
      {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်')) }}
      @if($errors->has())
        @foreach ($errors->get('password') as $error)
          <div class="alert alert-danger">
          {{ $error }}
          </div>
        @endforeach
      @endif
    </div>
    <div class="form-group">
      {{ Form::password('confirm-password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်ပြန်ရိုက်ပါ')) }}
      @if($errors->has())
        @foreach ($errors->get('confirm-password') as $error)
          <div class="alert alert-danger">
          {{ $error }}
          </div>
        @endforeach
      @endif
    </div>
    <input type="submit" value="Submit" class="btn-primary btn-lg btn">
  {{ Form::close() }}
  </div>
</section>
@stop