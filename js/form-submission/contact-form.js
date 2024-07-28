jQuery(document).ready(function () {
	jQuery("#contactpage").validate({
		submitHandler : function (e) {
			submitContactFormNow(jQuery("#contactpage"))
		},
		rules : {
			name : {
				required : true
			},
			email : {
				required : true,
				email : true
			},
			comments : {
				required : true
			}
		},
		errorElement : "span",
		errorPlacement : function (e, t) {
			e.appendTo(t.parent())
		}
	});
	submitContactFormNow = function (e) {
		var t = e.serialize();
		var n = "contact-form.php";
		jQuery.ajax({
			url : n,
			type : "POST",
			data : t,
			success : function (e) {
				var t = jQuery.parseJSON(e);
				if (t.status == "Success") {
					jQuery("#form_result").html('<span class="form-success">' + t.msg + "</span>").addClass("success");
				} else {
					jQuery("#form_result").html('<span class="form-error">' + t.msg + "</span>").addClass("error")
				}
			}
		});
		return false
	}
})
