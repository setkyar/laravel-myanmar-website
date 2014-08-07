  <div class="form-group">
    {{ Form::text('title', Input::old('title'), array('id' => 'title', 'class' => 'form-control input-lg', 'placeholder' => 'Title')) }}
  </div>
  <div class="form-group">
    {{ Form::text('slug', Input::old('slug'), array('id' => 'slug', 'class' => 'form-control input-sm', 'placeholder' => 'Slug')) }}
  </div>
  <div class="form-group">
    {{ Form::textarea('content', Input::old('content'), array('id' => 'content', 'class' => 'form-control', 'placeholder' => 'Content', 'rows' => '20', 'data-provide' => 'markdown')) }}
  </div>
  <div class="form-group">
    {{ Form::textarea('excerpt', Input::old('excerpt'), array('class' => 'form-control', 'placeholder' => 'Excerpt', 'rows' => '4')) }}
  </div>
  <div class="form-group">
    {{ Form::hidden('featured_img', Input::old('featured_img'), array('id' => 'featured_img', 'class' => 'form-control', 'placeholder' => 'Featured Image')) }}
  </div>

  <div class="row">
    <div class="col-md-6">
      <a href="#" class="feature-img-modal-btn" id="set-feature-img-btn" data-toggle="modal" data-target="#feature-img-modal">Set Featured Image</a>
    </div>
    <div class="col-md-6">
      <div class="form-group">
        {{ Form::select('category[]', $categories, isset($currentCategories) ? $currentCategories : '', array('multiple' => true, 'class' =>'form-control')) }}
      </div>
    </div>
  </div>

  <nav class="bottom-bar navbar navbar-default navbar-fixed-bottom" role="navigation">
    <div class="container">
      <div class="row">
        <div class="col-md-10">
           {{ Form::submit('Submit', array('class' => 'btn-primary btn')) }}
        </div>
        <div class="col-md-2">
          {{ Form::select('status', array('active' => 'Active', 'pending' => 'Pending'), null, array('class' => 'form-control'))}}
        </div>
      </div>
    </div>
  </nav>


@section('header')
  <link href="{{ asset('assets/css/dropzone.css') }}" rel="stylesheet">

@stop
@section('footer')
  <div class="modal fade" id="feature-img-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">File Upload</h4>
        </div>
        <div class="modal-body">
          {{ Form::open(array('action' => 'FileController@postUpload','files' => true, 'class' => 'dropzone', 'id' => 'feature-image-upload')) }}
    
          {{ Form::close() }}
        </div>
        <div class="modal-footer">
          <button type="button" id="set-feature-img" data-dismiss="modal" class="btn btn-primary">Set Featured Image</button>
        </div>
      </div>
    </div>
  </div>

  <div id="upload-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
          <h4 class="modal-title" id="myModalLabel">File Upload</h4>
        </div>
        <div class="modal-body">
          {{ Form::open(array('action' => 'FileController@postUpload','files' => true, 'class' => 'dropzone', 'id' => 'file-upload')) }}
    
          {{ Form::close() }}
        </div>
        <div class="modal-footer">
          <button type="button" id="insert-file" data-dismiss="modal" class="btn btn-primary">Close</button>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.slugify.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/markdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/to-markdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/boostrap-markdown.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/dropzone.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/js/blogCreate.js') }}"></script>
 
@stop