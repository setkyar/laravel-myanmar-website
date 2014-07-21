$(document).ready(function(){
	// Fix font issue for MAC
	// dirty code :3
	var OSName="Other";
	if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
	if (OSName == "MacOS") {
        $.ajax({
            url:"http://fonts.googleapis.com/earlyaccess/tharlon.css",
            // dataType:"script",
            success:function(data){
                 $("head").append("<style>" + data + "</style>");
                 $('body').css('font-family', 'Tharlon');
            }
        });
	}
});