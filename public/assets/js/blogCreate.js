	$('#slug').slugify('#title');

	Dropzone.autoDiscover = false;
	if ($('#featured_img').val().length > 0) {
		$('#set-feature-img-btn').html('<img src="'+ $('#featured_img').val() +'">').css('border', 'none');
    }
	var featureImageUpload = new Dropzone("#feature-image-upload", {
		paramName: "thumb",
	  	maxFilesize: 1,
	  	params: {"key": "thumb", "type" : "image"},
	  	thumbnailWidth: '690',
		uploadMultiple: false,
	  	addRemoveLinks: true,
		clickable: true,
	  	maxFiles: 1,
	});
	featureImageUpload.on("success", function(file, message) {
		$('#set-feature-img').on('click', function() {
		    $('#featured_img').val(message);
		    $('#set-feature-img-btn').html($('.dz-preview img'));
		});
	});

	var fileUpload = new Dropzone("#file-upload", {
		maxFilesize: 1,
	  	params: {"key": "file", "type" : "image"},
	});

	$("#content").markdown({
	  additionalButtons: [
	    [{
	          name: "uploadFile",
	          data: [{
	            name: "cmdBeer",
	            title: "Upload Image",
	            toggle: true,
	            icon: "glyphicon glyphicon-picture",
	            callback: function(e){
	            	selected = e.getSelection(), content = e.getContent()

	            	$('#upload-modal').modal();

	            	fileUpload.on("success", function(file, message) {
						var imgUrl = message;
						var imgContent = '![Image Description]('+ imgUrl +')';
						var cursor = selected.start + 2;
		      			e.replaceSelection(imgContent);
		      			e.setSelection(cursor,19);
					});
	            }
	          }]
	    }]
	  ]
	});
