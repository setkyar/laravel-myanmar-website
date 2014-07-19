<footer id="main-footer" class="main-footer">
      <p>Laravel Myanmar is a local community for Laravel - Laravel is a trademark of <a href="https://twitter.com/taylorotwell" target="_blank">Taylar Otwell</a></p>
      <p>Source code of this website is available on <a href="http://github.com/Laravel-Myanmar/website" target="_blank">Github</a> <!-- - Website is sponsored by <a href="http://myanmarwebdev.com" target="_blank">myanmarwebdev.com</a></p> -->
    </footer>
  </div>
@if (Auth::check())
  <nav class="admin-bar navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="#">Dashboard</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ url('/admin/blog') }}"><i class="glyphicon glyphicon-eye-open"></i> View All Blogs</a>
              </li>
              <li>
                <a href="{{ url('/admin/blog/create') }}"><i class="glyphicon glyphicon-plus"></i> Add New Blog</a>
              </li>
            </ul>
          </li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ url('/admin/blog/category') }}"><i class="glyphicon glyphicon-eye-open"></i> View All Categories</a>
              </li>
              <li>
                <a href="{{ url('/admin/blog/category/create') }}"><i class="glyphicon glyphicon-plus"></i> Add New Category</a>
              </li>
            </ul>
          </li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->username }} <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ action('UserController@getProfile') }}">Profile ကြည့်ရန်</a></li>
                <li><a href="{{ action('UserController@getEdit') }}">Profile ပြင်ရန်</a></li>
                <li><a href="{{ action('UserController@getLogout') }}">ထွက်ရန်</a></li>
              </ul>
            </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div>
  </nav>
@endif
    <script src="{{ asset('assets/js/jquery-2.1.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    @yield('footer')
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-52997465-1', 'auto');
      ga('send', 'pageview');

    </script>
  </body>
</html>