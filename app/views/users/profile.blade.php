@extends('templates.layouts.default')
@section('content')
<section id="main-body" class="profile-content row">
  <div class="parent-page-title col-md-12">
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
  <div class="main-sidebar col-md-3">
  <div class="profile-gravatar">
    <img src="{{ "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $user->email ) ) ) . "?s=" . 200 }}">
  </div>
  @if(Auth::check() and $user->username == Auth::user()->username)
    <ul class="sub-page">
      <li><a href="{{ action('UserController@getProfile') }}" class="active">Profile ကြည့်ရန်</a></li>
      <li><a href="{{ action('UserController@getEdit') }}">Profile ပြင်ရန်</a></li>
    </ul>
  @endif
  </div>
  <div class="main-content col-md-9">
  
    @if (isset($user->bio))
      {{ Markdown::text($user->bio) }}
    @elseif (Auth::check() and $user->username == Auth::user()->username)
      <a href="{{ action('UserController@getEdit') }}" class="btn-sm btn-default btn">ကိုယ့်အကြောင်း အတိုချုပ်ရေးရန်</a>
    @else
      <small class="alert alert-warning">သူ့အကြောင်းအတိုချုပ် ရေးထားခြင်းမရှိပါ</small>
    @endif
  <hr>
    <div class="profile-blog-panel panel panel-default">
      <div class="panel-heading">
        <h3 class="panel-title">My blogs</h3>
      </div>
      <div class="panel-body">
        <ul>
        @foreach ($user->blogs as $blog)
          <li><a href="{{ route('blogSingle', array($blog->slug) ); }}">{{ $blog->title }}</a></li>
        @endforeach
        </ul>
      </div>
    </div>
  </div>
</section>
@stop