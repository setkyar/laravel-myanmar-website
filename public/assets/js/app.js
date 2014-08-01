/*
Name : Fixing font issue for Mac
Author : Hein Zaw Htet
*/
$(document).ready(function(){
	// Fix font issue for MAC
	var OSName="Other";
	if (navigator.appVersion.indexOf("Mac")!=-1) OSName="MacOS";
	if (OSName == "MacOS") {
        $.ajax({
            url:"/assets/css/tharlon.css",
            success:function(data){
                 $("head").append("<style>" + data + "</style>");
            }
        });
	}
});