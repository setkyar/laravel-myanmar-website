<footer id="main-footer" class="main-footer">
      <p>Laravel Myanmar is a local community for Laravel - Laravel is a trademark of <a href="https://twitter.com/taylorotwell" target="_blank">Taylar Otwell</a></p>
      <p>Source code of this website is available on <a href="http://github.com/Laravel-Myanmar/website" target="_blank">Github</a> - Website is sponsored by <a href="http://myanmarwebdev.com" target="_blank">myanmarwebdev.com</a></p>
    </footer>
  </div>

<!-- Register Modal -->
<div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">မှတ်ပုံတင်ရန်</h4>
      </div>
      <div class="modal-body">
        @include('users.forms.register-form')
      </div>
    </div>
  </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">ဝင်ရန်</h4>
      </div>
      <div class="modal-body">
        @include('users.forms.login-form')
      </div>
    </div>
  </div>
</div>
    <script src="http://localhost/jquery.js"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  </body>
</html>