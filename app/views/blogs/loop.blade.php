@if($blogs->count())
	@foreach ($blogs as $blog)
		<article class="blog-wrap">
			<p class="blog-date">{{ $blog->created_at->format('d F Y') }}</p>
		  <h1 class="blog-title"><a href="{{ route('blogSingle', array($blog->slug) ); }}">{{ $blog->title }}</a></h1>
		  <h4 class="blog-author">by <a href="{{ route('profile', array($blog->user['profile_url'])) }}">{{ $blog->user['username'] }}</a></h4>
	    <figure>
	  <img href="{{ route('blogSingle', array($blog->slug) ); }}" src="{{ $blog->featured_img }}" alt="{{ $blog->title }}">
	    </figure>
		  <p class="blog-excerpt">{{ $blog->excerpt }}</p>
		<a class="btn-primary btn">ဆက်လက်ဖတ်ရန်</a>
	  </article>
	@endforeach
@else
	<h3>မည်သည့် ဘလော့ဂ်မှ မရှိသေးပါ ။<a href="{{ url('/admin/blog/create') }}"><i class="glyphicon glyphicon-plus"></i> ဒီကအေန တင္လို႔ရပါတယ္</a></h3>
@endif