
function validatepage() {
	jQuery("#loan_form").validate({
		rules: {
			fname: {
				required: true
			},
			lname: {
				required: true,
			        minlength: 2
			},
			email: {
				required: true,
				email: true,
                        //		                remote: "/util/checkemail"
			},
			phone: {
				required: true,
				minlength: 10
			},
			zip: {
				required: true,
                        minlength: 5,
                        maxlength: 5,
			},
			street: {
				required: true
			},
			city: {
				required: true
			},
			state: {
				required: true
			},
			routing: {
				required: true
			},
			bank_name: {
				required: true
			},
		} ,
		messages: {
			fname: {
				required: "Enter your first name"
			},
			lname: {
				required: "Enter your last name",
				minlength: "Last name needs to be at least 2 characters"
			},
			email: {
				required: "Enter your email address",
				email: "Enter a valid email address",
			        remote: "Your email address appears to be invalid",
				},
			phone: {
				required: "Enter your phone number",
				minlength: jQuery.format("Enter at least {0} characters"),
			},
			zip: {
				required: "Enter your zip code",
				minlength: jQuery.format("Enter at least {0} characters"),
				maxlength: jQuery.format("Enter at most {0} characters"),
			},
			street: {
				required: "Enter your street address"
			},
			city: {
				required: "Enter your city"
			},
			state: {
				required: "Choose your state"
			},
			routing: {
				required: "Enter your bank routing #" 
			},
			bank_name: {
				required: "Enter your bank name"
			},
		} ,
		errorPlacement: function(error, element) {
			error.appendTo( element.parent("div") );
		}
	});
}

