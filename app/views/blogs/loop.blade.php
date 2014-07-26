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
		  <div class="row">
	    	<div class="col-md-6"><a class="btn-primary btn" href="{{ route('blogSingle', array($blog->slug) ); }}">ဆက်လက်ဖတ်ရန်</a></div>
	    	<div class="col-md-6">
	    		<iframe src="//www.facebook.com/plugins/like.php?href={{ route('blogSingle', array($blog->slug) ); }}&amp;width=150px&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=195310000651099" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150pxpx; height:35px;" allowTransparency="true"></iframe>
	    	</div>
	    </div>
	  </article>
	@endforeach
	{{ $blogs->links() }}
@else
	<h3>မည်သည့် ဘလော့ဂ်မှ မရှိသေးပါ ။<a href="{{ url('/admin/blog/create') }}"><i class="glyphicon glyphicon-plus"></i> ဒီကအနေ တင်လို့ရပါတယ်</a></h3>
@endif