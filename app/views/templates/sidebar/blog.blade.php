<div class="main-sidebar col-md-3">
	<h6 class="sidebar-title">Categories</h6>
	<ul class="sub-page">
		@foreach ($categories as $category)
			<li><a href="{{ route('blogCategory', array('name' => lcfirst($category->name))) }}">{{ $category->name }}</a></li>
		@endforeach
	</ul>
</div>