$('document').ready(function(){
	$('#login-form .btn-submit').on('click', function(){
		var txtEmail = $('#txtEmail').val();
		var txtPassword = $('#txtPassword').val();

		jQuery.ajax({
            type: "POST",
            url: window.location.href + '/login',
            data : $("#login-form").serialize(),
            success: function (data, textStatus, request) {
            	if(data.message == "success"){
            		console.log('success');
	            	window.location.replace(window.location.href + 'dashboard');
	            }else{
	            	alert("Error Loging, please contact Administrator.");
	            }
            	
            },
            error: function (errMsg) {
                alert("Error Loging, please contact Administrator.");
            }
        });
	});
	$('#btn-confirm').on('click', function(){
		jQuery.ajax({
            type: "POST",
            url: window.location.origin + '/book',
            data : $("#bookingForm").serialize(),
            success: function (data, textStatus, request) {
            	console.log(data);
            	if(data == "success"){
            		console.log('success');
	            	window.location.replace(window.location.origin + '/dashboard');
	            }else{
	            	alert("Error Booking, please contact Administrator.");
	            }
            	
            },
            error: function (errMsg) {
                alert("Error Booking, please contact Administrator.");
            }
        });
	});
		
});