@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>အမျိုးအစား ပေါင်းထည့်ရန်</h1>
  </div>
  <div class="main-content col-lg-12">
  	<form method="post">
     <div class="form-group">
       <input type="text" name="name" class="form-control" placeholder="Name">
     </div>
     <div class="form-group">
       <textarea class="form-control" name="description" placeholder="Description"></textarea>
     </div>

     <nav class="bottom-bar navbar navbar-default navbar-fixed-bottom" role="navigation">
      <div class="container">
          <input type="submit" class="btn-primary btn" value="Submit">
      </div>
    </nav>

    </form>
  </div>
</section>

@stop