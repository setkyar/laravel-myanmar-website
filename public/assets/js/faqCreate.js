$('#slug').slugify('#question');

Dropzone.autoDiscover = false;

var fileUpload = new Dropzone("#file-upload", {
	maxFilesize: 1,
  	params: {"key": "file", "type" : "image"},
});

$("#answer").markdown({
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