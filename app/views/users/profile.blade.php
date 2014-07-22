@extends('templates.layouts.default')
@section('content')
<section id="main-body" class="profile-content row">
  <div class="parent-page-title col-lg-12">
    <h1>{{ $user->username }}</h1>
    <small class="profile-job">
      @if ($user->has_job_position)
        {{ $user->job_position }}
      @elseif (Auth::check() and $user->username == Auth::user()->username)
        <a href="{{ action('UserController@getEdit') }}" class="btn-sm btn-default btn">အလုပ်ရာထူး ထည့်ရန်</a>
      @endif
      @if ($user->has_job_at)
        at {{ $user->job_at }}
      @elseif (Auth::check() and $user->username == Auth::user()->username)
        <a href="{{ action('UserController@getEdit') }}" class="btn-sm btn-default btn">လုပ်ငန်းနာမည်ထည့်ရန်</a>
      @endif
    </small>
  </div>
  <div class="main-sidebar col-lg-3">
  <div class="profile-gravatar">
    <img src="{{ "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $user->email ) ) ) . "?s=" . 200 }}">
  </div>
    <ul class="sub-page">
      <li><a href="{{ action('UserController@getProfile') }}" class="active">Profile ကြည့်ရန်</a></li>
      <li><a href="{{ action('UserController@getEdit') }}">Profile ပြင်ရန်</a></li>
    </ul>
  </div>
  <div class="main-content col-lg-9">
  <p>
      @if (isset($user->bio))
        {{ $user->bio }}
      @elseif (Auth::check() and $user->username == Auth::user()->username)
        <a href="{{ action('UserController@getEdit') }}" class="btn-sm btn-default btn">ကိုယ့်အကြောင်း အတိုချုပ်ရေးရန်</a>
      @else
        <small class="alert alert-warning">သူ့အကြောင်းအတိုချုပ် ရေးထားခြင်းမရှိပါ</small>
      @endif
  </p>
  </div>
</section>
@stop
