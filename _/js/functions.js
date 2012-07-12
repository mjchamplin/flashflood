// remap jQuery to $
(function($){})(window.jQuery);


/* trigger when page is ready */
$(document).ready(function (){


	// validate signup form on keyup and submit
	var validator = $("#contactform").validate({
		rules: {
			contactname: {
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true,
				minlength: 10
			}
		},
		messages: {
			contactname: {
				required: "Please enter your name",
				minlength: jQuery.format("Your name needs to be at least {0} characters")
			},
			email: {
				required: "Please enter a valid email address",
				minlength: "Please enter a valid email address"
			},
			message: {
				required: "You need to enter a message!",
				minlength: jQuery.format("Enter at least {0} characters")
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			label.addClass("checked");
		}
	});
	
	// fancy tooltips
	$(function() {
		$('#social *').tooltip();
    });


});


/* optional triggers

$(window).load(function() {
	
});

$(window).resize(function() {
	
});

*/