<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Myanmar</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    @if(Auth::check())
      <style type="text/css">
        body {
          padding-top: 50px;
        }
      </style>
    @endif
    @yield('header')
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="{{ $bodyClass or '' }}">
  <div class="container">
    <header id="main-header" class="main-header navbar navbar-default" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ url() }}"><img src="{{ asset('assets/img/lm-logo.png') }}"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav class="main-nav collapse navbar-collapse navbar-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="{{ url('docs') }}">အသုံးပြုနည်းများ</a></li>
            <li><a href="{{ url('blog') }}">ဘလော့ဂ်</a></li>
            <li><a href="https://www.facebook.com/groups/laravelmyanmar/" target="_blank">ဆွေးနွေးရန်</a></li>
            <!-- <li><a href="{{ url('members') }}">အသင်းဝင်များ</a></li> -->
            <li><a href="{{ url('about') }}">ကျွန်ုပ်တို့အကြောင်း</a></li>
          </ul>
        </nav>

        <div class="navbar-right">
          <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Ffacebook.com%2Flaravelmyanmar&amp;width=150px&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=195310000651099" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150pxpx; height:35px;" allowTransparency="true"></iframe>
        </div>
    </header>
    @if (Session::has('error'))
        <div class="main-flash-message">
          <div class="alert alert-danger">
            {{ Session::get('error') }}
          </div>
        </div>
    @endif

    @if (Session::has('success'))
        <div class="main-flash-message">
          <div class="alert alert-success">
            {{ Session::get('success') }}
          </div>
        </div>
    @endif