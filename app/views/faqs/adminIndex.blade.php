@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>All FAQs</h1>
  </div>
  <div class="faq-content main-content col-md-12">
    <div class="toolbar text-right">
      <a href="{{ route('faqCreate') }}" class="btn-primary btn"><i class="glyphicon glyphicon-plus"></i> Add New Faq</a>
    </div>
  	<table class="table table-responsive table-striped">
    @foreach ($faqs as $faq)
      <tr>
        <td>{{ $faq->question }}</td>
        <td>{{ $faq->created_at->format('d F Y') }}</td>
        <td class="text-right">
          <a href="{{ action('FaqController@getSingle', array('slug' => $faq->slug)) }}" class="btn-info btn" target="_blank"><i class="glyphicon glyphicon-eye-open"></i></a>
          <a href="{{ route('faqEdit', array('id' => $faq->id)) }}" class="btn-warning btn"><i class="glyphicon glyphicon-edit"></i></a>
          <a href="{{ route('faqDelete', array('id' => $faq->id)) }}" class="btn-danger btn"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
      </tr>
    @endforeach
    </table>
  </div>
</section>

@stop