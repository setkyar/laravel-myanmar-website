<div class="main-sidebar col-md-3">
	<h6 class="sidebar-title">Search</h6>
	<div class="search-box">
	  	{{ Form::open(array('url' => 'search', 'method' => 'GET')) }}
	  		<div class="form-group">
	  			{{ Form::text('query', '', array('class' => 'form-control', 'placeholder' => 'Search')) }}
	  		</div>
	  		{{ Form::submit('Search', array('class' => 'btn btn-primary', 'style' => 'width:100%;')) }}
	  	{{ Form::close() }}
  	</div>

	<h6 class="sidebar-title">Categories</h6>
	<ul class="sub-page">
		@foreach ($categories as $category)
			<li><a href="{{ route('blogCategory', array('name' => lcfirst($category->name))) }}">{{ $category->name }}</a></li>
		@endforeach
	</ul>
</div>