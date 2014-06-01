@extends('templates.layouts.default')

@section('content')
<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>အသင်းဝင်များ</h1>
  </div>
  <div class="member-content main-content col-lg-9">
  @if (count($users) > 0)
    @foreach($users as $user)
      <div class="profile-card">
        <a href="{{ action('UserController@getProfile', array($user->profile_url)) }}">
          <div class="profile-avatar">
            <img src="assets/img/1535734_10200320194646041_737002202_n.jpg">
          </div>
          <div class="profile-info">
            <h3 class="profile-name">{{ $user->username }}</h3>
            <small class="profile-job">
              {{ $user->job_position }}              
              @if (isset($user->job_position))
                at {{ $user->job_at }}
              @elseif (Auth::check() and $user->username == Auth::user()->username)
                <a href="{{ action('UserController@getEdit') }}">အလုပ်အကိုင် ထည့်ရန်</a>
              @endif
            </small>
          </div>
        </a>
      </div>
    @endforeach
  @else
    အသင်းဝင်မရှိသေးပါဘူး 
  @endif
  </div>
  <div class="member-sidebar main-sidebar col-lg-3">
    <ul>
      <li>Preface
        <ul>
          <li><a href="/docs/introduction">Introduction</a></li>
          <li><a href="/docs/quick">Quickstart</a></li>
          <li><a href="/docs/releases">Release Notes</a></li>
          <li><a href="/docs/upgrade">Upgrade Guide</a></li>
        </ul>
      </li>
      <li>Getting Started
        <ul>
          <li><a href="/docs/installation">Installation</a></li>
          <li><a href="/docs/configuration">Configuration</a></li>
          <li><a href="/docs/homestead">Homestead</a></li>
          <li><a href="/docs/lifecycle">Request Lifecycle</a></li>
          <li><a href="/docs/routing">Routing</a></li>
          <li><a href="/docs/requests">Requests &amp; Input</a></li>
          <li><a href="/docs/responses">Views &amp; Responses</a></li>
          <li><a href="/docs/controllers">Controllers</a></li>
          <li><a href="/docs/errors">Errors &amp; Logging</a></li>
        </ul>
      </li>
      <li>Learning More
        <ul>
          <li><a href="/docs/security">Authentication</a></li>
          <li><a href="/docs/billing">Billing</a></li>
          <li><a href="/docs/cache">Cache</a></li>
          <li><a href="/docs/extending">Core Extension</a></li>
          <li><a href="/docs/events">Events</a></li>
          <li><a href="/docs/facades">Facades</a></li>
          <li><a href="/docs/html">Forms &amp; HTML</a></li>
          <li><a href="/docs/helpers">Helpers</a></li>
          <li><a href="/docs/ioc">IoC Container</a></li>
          <li><a href="/docs/localization">Localization</a></li>
          <li><a href="/docs/mail">Mail</a></li>
          <li><a href="/docs/packages">Package Development</a></li>
          <li><a href="/docs/pagination">Pagination</a></li>
          <li><a href="/docs/queues">Queues</a></li>
          <li><a href="/docs/security">Security</a></li>
          <li><a href="/docs/session">Session</a></li>
          <li><a href="/docs/ssh">SSH</a></li>
          <li><a href="/docs/templates">Templates</a></li>
          <li><a href="/docs/testing">Unit Testing</a></li>
          <li><a href="/docs/validation">Validation</a></li>
        </ul>
      </li>
      <li>Database
        <ul>
          <li><a href="/docs/database">Basic Usage</a></li>
          <li><a href="/docs/queries">Query Builder</a></li>
          <li><a href="/docs/eloquent">Eloquent ORM</a></li>
          <li><a href="/docs/schema">Schema Builder</a></li>
          <li><a href="/docs/migrations">Migrations &amp; Seeding</a></li>
          <li><a href="/docs/redis">Redis</a></li>
        </ul>
      </li>
      <li>Artisan CLI
        <ul>
          <li><a href="/docs/artisan">Overview</a></li>
          <li><a href="/docs/commands">Development</a></li>
        </ul>
      </li>
    </ul>
  </div>
</section>
@stop