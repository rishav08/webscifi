$(function() {
$( "#confirmBooking" ).dialog({
			modal : true,
			autoOpen: false ,
			width : 380,
			title : "Confirm Booking",
			close : function(event,ui){
		    	$('#bookingForm')[0].reset();

		    } 
		});


$(".btn-book").on("click", function() {
     $( "#confirmBooking" ).dialog( "open" );
   });


$( "#cancelDialog" ).dialog({
		modal : true,
		autoOpen: false ,
		width : 380,
		title : "Cancel Booking",
		open: function() {
		  var markup = 'Are you sure you want to cancel this booking?';
		  $(this).html(markup);
		},
		buttons:
    	[
        	{
            	text: "Yes",                
            	click: function () {

	            	jQuery.ajax({
			            type: "POST",
			            url: window.location.origin + '/delete',
			            data : {'id': $( "#cancelDialog" ).data('id')},
			            success: function (data, textStatus, request) {
			            	console.log(data);
			            	if(data == "success"){
			            		console.log('success');
				            	window.location.replace(window.location.origin + '/cancel');
				            }else{
				            	alert("Error Booking, please contact Administrator.");
				            }
			            	
			            },
			            error: function (errMsg) {
			                alert("Error Booking, please contact Administrator.");
			            }
			        });                
        		}
        	},
        	{
            	text: "No",
            	click: function () { $(this).dialog("close"); },
        	}
    	]
});

$(".sportActivity").on("click", function(){
	$id = $(this).data('id');
	$( "#cancelDialog" ).data('id', $id).dialog( "open" );
	
});

$( "#datepicker" ).datepicker();
});


