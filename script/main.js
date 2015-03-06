var loadJS = [
              "jquery",
              "jquery-form",
              "jquery-json"
              ];

require.config({
	baseUrl : "script",
	paths: {
		"jquery": "jquery-2.1.3",
		"jquery-form" : "jquery.form",
		"jquery-json" : "jquery.json-2.4.min"
	}
});


//Function In main
require(loadJS, LoginAction("./FormSubmit"));



function LoginAction(url){
	$(document).ready(function(){
		$("#loginBtn").click(function(){
			var options = {
					resetForm :false,
					url : "purreq.php", 
					type : "POST",
					dataType : "json",
				//	success : function(data){
					//	alert("userName: " + data.userName + "\n"
						//		+ "password: " + data.pwd);//回调参数
			//		}
			};
			$("#loginForm").ajaxSubmit(options);
		});
	});
};

