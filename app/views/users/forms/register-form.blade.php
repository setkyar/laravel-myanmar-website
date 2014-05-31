{{ Form::model(null, array('action' => array('UserController@postRegister'))) }}
  <div class="form-group">
    {{ Form::text('email', Input::old('email'), array('class' => 'form-control', 'placeholder' => 'အီးမေးလ်')) }}
  </div>
  <div class="form-group">
    {{ Form::text('username', Input::old('username'), array('class' => 'form-control', 'placeholder' => 'နာမည်')) }}
  </div>
  <div class="form-group">
    {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်')) }}
  </div>
  <div class="form-group">
    {{ Form::password('confirm-password', array('class' => 'form-control', 'placeholder' => 'စကားဝှက်ပြန်ရိုက်ပါ')) }}
  </div>
  <div class="form-group input-group">
    <span class="input-group-addon">laravelmyanmar.com/profile/</span>
    {{ Form::text('profile_url', Input::old('profile_url'), array('class' => 'form-control', 'placeholder' => 'URL လိပ်စာ (အင်္ဂလိပ်လို)')) }}
  </div>
  <input type="submit" value="ဝင်ရန်" class="btn-primary btn-lg btn">
{{ Form::close() }}