@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>အမျိုးအစားများ</h1>
  </div>
  <div class="main-content col-md-12">
  <div class="toolbar text-right">
    <a href="{{ action('CategoryController@getCreate') }}" class="btn-primary btn"><i class="glyphicon glyphicon-plus"></i> Add New Category</a>
  </div>
    <table class="table table-responsive table-striped">
  	@foreach ($categories as $category)
      <tr>
        <td>{{ $category->name }}</td>
        <td>{{ $category->description }}</td>
        <td class="text-right">
          <a href="#" class="btn-info btn"><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="#" class="btn-warning btn"><i class="glyphicon glyphicon-edit"></i></a>
          <a href="{{ route('categoryDelete', array('id' => $category->id)) }}" class="btn-danger btn"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
      </tr>
    @endforeach
    </table>
  </div>
</section>

@stop

@section('header')
  
  <link href="{{ asset('assets/css/widearea.css') }}" rel="stylesheet">

@stop
@section('footer')
  <script type="text/javascript" src="{{ asset('assets/js/jquery.slugify.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/markdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/to-markdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/boostrap-markdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/widearea.js') }}"></script>
  <script type="text/javascript">
    $('#slug').slugify('#title');
    wideArea();
  </script>
@stop