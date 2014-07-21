@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>ဘလော့ဂ်များ</h1>
  </div>
  <div class="main-content col-md-12">
  <div class="toolbar text-right">
    <a href="{{ action('BlogController@getCreate') }}" class="btn-primary btn"><i class="glyphicon glyphicon-plus"></i> Add New Blog</a>
  </div>
    <table class="table table-responsive table-striped">
    @foreach ($blogs as $blog)
      <tr>
        <td>{{ $blog->title }}</td>
        <td>{{ $blog->created_at->format('d F Y') }}</td>
        <td class="text-right">
          <a href="{{ action('BlogController@getSingle', array('slug' => $blog->slug)) }}" class="btn-info btn" target="_blank"><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="{{ route('blogEdit', array('id' => $blog->id)) }}" class="btn-warning btn"><i class="glyphicon glyphicon-edit"></i></a>
          <a href="{{ route('blogDelete', array('id' => $blog->id)) }}" class="btn-danger btn"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
      </tr>
    @endforeach
    </table>
    {{ $blogs->links() }}
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