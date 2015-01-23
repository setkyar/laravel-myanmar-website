@extends('templates.layouts.default')

@section('content')
<style type="text/css">
  #twitter-widget-0 {
    height: 34px !important;
  }  
</style>

<section id="main-body" class="row">
  <div class="parent-page-title col-md-12">
    <h1>{{ $blog->title }}</h1>
    <h4 class="blog-meta"><i class="glyphicon glyphicon-user"></i> <a href="{{ route('profile', array($blog->user['profile_url'])) }}">{{ $blog->user->username }}</a> <i class="glyphicon glyphicon-calendar"></i> {{ $blog->created_at->format('d F Y') }} </h4>
    <div class="social-box">
      <a href="https://twitter.com/share" class="twitter-share-button" data-text="http://laravelmyanmar.com/blog" data-via="Laravel_Myanmar" data-hashtags="Laravel_Myanmar" data-dnt="true">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>

      <iframe src="//www.facebook.com/plugins/like.php?href={{ route('blogSingle', array($blog->slug) ); }}&amp;width=150px&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=true&amp;height=35&amp;appId=195310000651099" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:150pxpx; height:35px;" allowTransparency="true"></iframe>
    </div>
  </div>
  <div class="main-content col-md-9">
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

@section('header')
  <link rel="stylesheet" href="{{ asset('assets/css/peacock.css')}}">
@stop

@section('footer')
  <script src="{{ asset('assets/js/highlight.pack.js')}}"></script>
  <script>hljs.initHighlightingOnLoad();</script>
@stop