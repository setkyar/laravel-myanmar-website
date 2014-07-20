@extends('templates.layouts.default')

@section('content')

<section id="main-body" class="row">
  <div class="parent-page-title col-lg-12">
    <h1>{{ $blog->title }}</h1>
    <h4 class="blog-meta"><i class="glyphicon glyphicon-user"></i> <a href="{{ route('profile', array($blog->user['profile_url'])) }}">{{ $blog->user->username }}</a> <i class="glyphicon glyphicon-calendar"></i> {{ $blog->created_at->format('d F Y') }} </h4>
  </div>
  <div class="main-content col-lg-9">
  	<article class="blog-wrap">
		  <div class="blog-content">
		  	 {{ Markdown::text($blog->content) }}
		  </div>
      <hr>
      <div class="blog-comment">
            <div id="disqus_thread"></div>
            <script type="text/javascript">
                /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                var disqus_shortname = 'laravelmyanmar'; // required: replace example with your forum shortname

                /* * * DON'T EDIT BELOW THIS LINE * * */
                (function() {
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
            <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
              </div>
    </article>
  </div>
  @include('templates.sidebar.blog')
</section>

@stop