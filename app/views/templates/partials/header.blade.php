<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Myanmar</title>

    <!-- Bootstrap -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
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
          <a class="navbar-brand" href="#">laravelmyanmar.com</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <nav class="main-nav collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="index.html" class="active">မူလစာမျက်နှာ</a></li>
            <li><a href="docs.html">အသုံးပြုနည်းများ</a></li>
            <li><a href="forum.html">ဖိုရမ်</a></li>
            <li><a href="members.html">အသင်းဝင်များ</a></li>
            <li><a href="about.html">ကျွနု်ပ်တို့အကြောင်း</a></li>
          </ul>
          <ul class="user-nav nav navbar-nav navbar-right">
            <li>
              <a href="#" data-toggle="modal" data-target="#registerModal">မှတ်ပုံတင်ရန်</a>
            </li>
            <li>
              <a href="#" data-toggle="modal" data-target="#loginModal">ဝင်ရန်</a>
            </li>
          </ul>
        </nav>
    </header>