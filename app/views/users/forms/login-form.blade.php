{{ Form::model(null, array('action' => array('UserController@postLogin'))) }}
  <div class="form-group">
    {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'အီးမေးလ်')) }}
    @if($errors->has())
      @foreach ($errors->get('email') as $error)
        <div class="alert alert-danger">
        {{ $error }}
        </div>
      @endforeach
    @endif
  </div>
  <div class="form-group">
    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်')) }}
    @if($errors->has())
      @foreach ($errors->get('password') as $error)
        <div class="alert alert-danger">
        {{ $error }}
        </div>
      @endforeach
    @endif
  </div>
  <input type="submit" value="ဝင်ရန်" class="btn-primary btn-lg btn">
  <div class="login-shortcut">
    <a href="forgot-password.html">စကားဝှက်မေ့နေတယ်</a>
  </div>
{{ Form::close() }}