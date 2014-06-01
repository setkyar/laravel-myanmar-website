{{ Form::model(null, array('action' => array('UserController@postRegister'))) }}
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
    {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'နာမည်')) }}
    @if($errors->has())
      @foreach ($errors->get('username') as $error)
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
  <div class="form-group">
    {{ Form::password('confirm-password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်ပြန်ရိုက်ပါ')) }}
    @if($errors->has())
      @foreach ($errors->get('confirm-password') as $error)
        <div class="alert alert-danger">
        {{ $error }}
        </div>
      @endforeach
    @endif
  </div>
  <div class="form-group input-group">
    <span class="input-group-addon">laravelmyanmar.com/profile/</span>
    {{ Form::text('profile_url', Input::old('profile_url'), array('class' => 'form-control', 'placeholder' => 'URL လိပ်စာ (အင်္ဂလိပ်လို)')) }}
    @if($errors->has())
      @foreach ($errors->get('profile_url') as $error)
        <div class="alert alert-danger">
        {{ $error }}
        </div>
      @endforeach
    @endif
  </div>
  <input type="submit" value="ဝင်ရန်" class="btn-primary btn-lg btn">
{{ Form::close() }}