@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>Admin Dashboard</h1>
  </div>
  <div class="admin-content main-content col-lg-12">
	<div class="admin-stats row">
		<div class="col-xs-6">
			<div class="panel panel-info">
			  <div class="panel-heading">
			    <h3 class="panel-title">Total Blogs</h3>
			  </div>
			  <div class="panel-body">
			    <h1 class="count">{{ $totalBlogs }}</h1>
			  </div>
			</div>
		</div>
		<div class="col-xs-6">
			<div class="panel panel-warning">
			  <div class="panel-heading">
			    <h3 class="panel-title">Total Comments</h3>
			  </div>
			  <div class="panel-body">
			    <h1 class="count">TODO	</h1>
			  </div>
			</div>
		</div>
	</div>
		<h4>Stats</h4>
		<div id='chart'></div>
  </div>
</section>

@stop

@section('footer')
	
	<script type="text/javascript" src="{{ asset('assets/js/oocharts.min.js') }}"></script>

	<script type="text/javascript">
	window.onload = function(){

        oo.setAPIKey("ae6001f60e2f3af48b4e2b31b8ae0849788d5167");

        oo.load(function(){

            var timeline = new oo.Timeline("88783088", "30d");

            timeline.addMetric("ga:visits", "Visits");

            timeline.addMetric("ga:newVisits", "New Visits");

            timeline.draw('chart');

        });
    };
	</script>
@stop