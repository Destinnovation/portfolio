function validateContactForm() {
	var valid = true;

	$(".info").html("");
	$(".input-field").css('border', '#e0dfdf 1px solid');
	$("#contact-first-name").removeClass("error-field");
	$("#contact-last-name").removeClass("error-field");
	$("#contact-email").removeClass("error-field");
	$("#contact-phone").removeClass("error-field");
	$("#contact-message").removeClass("error-field");

	var firstName = $("#contact-first-name").val();
	var lastName = $("#contact-last-name").val();
	var email = $("#contact-email").val();
	var phone = $("#contact-phone").val();
	var message = $("#contact-message").val();

	if (firstName == "") {
		$("#firstName-info").html("Required.");
		$("#contact-first-name").css('border', '#e66262 1px solid');
		$("#contact-first-name").addClass("error-field");
		valid = false;
	}
	if (lastName == "") {
		$("#lastName-info").html("Required.");
		$("#contact-last-name").css('border', '#e66262 1px solid');
		$("#contact-last-name").addClass("error-field");
		valid = false;
	}

	if (email == "") {
		$("#email-info").html("Required.");
		$("#contact-email").css('border', '#e66262 1px solid');
		$("#contact-email").addClass("error-field");
		valid = false;
	}

	if (!email.match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
		$("#email-info").html("Invalid Email Address.");
		$("#contact-email").css('border', '#e66262 1px solid');
		$("#contact-email").addClass("error-field");
		valid = false;
	}

	if (phone == "") {
		$("#phone-info").html("Required.");
		$("#contact-phone").css('border', '#e66262 1px solid');
		$("#contact-phone").addClass("error-field");
		valid = false;
	}

	if ($('input[name="contact-subject"]:checked').length == 0) {
		$("#subject-info").html("Required.");
		valid = false;
	}
	if (message == "") {
		$("#message-info").html("Required.");
		$("#contact-message").css('border', '#e66262 1px solid');
		$("#contact-message").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
	}
	return valid;
}

$(document).ready(function () {
	$(".subject-option").click(function () {
    	if($(this).val() == "others") {
			$("#other-subject").show();
		} else {
			$("#other-subject").hide();
		}
    });
});

