/*
*custom script by jai
*/

$(document).ready(function(){

		$("#form_register").on('click', function(e){
		
		$(".check_field").each(function(){
			if ($.trim($(this).val()) <= 0) {

				$(".check_field").css("background-color", "#f3dce0");
				e.preventDefault();
				return false;
				
			}
		});


		
		if(!isValidEmailAddress($("#email").val()))
			{
				//alert("not");
				$("#req_email").css("display", "block");
				$("#req_email").html("Enter Valid Email");
				e.preventDefault();
				return false;
			}	
			
		if(!isValidPhone($("#phone").val()))
			{
				//alert("not");
				$("#req_phone").css("display", "block");
				$("#req_phone").html("Enter Valid Phone number");
				e.preventDefault();
				return false;
			}	
		if(!isConfirmPass($("#password").val(), $("#repassword").val()))
		{
				$("#req_repassword").css("display", "block");
				$("#req_repassword").html("Password is not match");
				e.preventDefault();
				return false;
		}

	return true;
		
	});

});


$(document).ready(function(){

		$("#login_form").on('click', function(e){
		
		$(".check_field").each(function(){
			if ($.trim($(this).val()) <= 0) {

				$(".check_field").css("background-color", "#f3dce0");
				e.preventDefault();
				return false;
				
			}
		});


		if(!isValidEmailAddress($("#username").val()))
			{
				//alert("not");
				$("#req_email").css("display", "block");
				$("#req_email").html("Enter Valid Email");
				e.preventDefault();
				return false;
			}
			
		if(!isConfirmPass($("#password").val(), $("#repassword").val()))
		{
				$("#req_repassword").css("display", "block");
				$("#req_repassword").html("Password is not match");
				e.preventDefault();
				return false;
		}
		
		

	return true;
		
	});


		// $("#profileimage").change(function () {
  //       readURL(this);
  //   });


});


$(document).ready(function(){

		$("#update_profile").on('click', function(e){
		
		$(".check_field").each(function(){
			if ($.trim($(this).val()) <= 0) {

				$(".check_field").css("background-color", "#f3dce0");
				e.preventDefault();
				return false;
				
			}
		});


		
		if(!isValidEmailAddress($("#email").val()))
			{
				//alert("not");
				$("#req_email").css("display", "block");
				$("#req_email").html("Enter Valid Email");
				e.preventDefault();
				return false;
			}	
			
		if(!isValidPhone($("#phone").val()))
			{
				//alert("not");
				$("#req_phone").css("display", "block");
				$("#req_phone").html("Enter Valid Phone number");
				e.preventDefault();
				return false;
			}	
		// if(!isConfirmPass($("#password").val(), $("#repassword").val()))
		// {
		// 		$("#req_repassword").css("display", "block");
		// 		$("#req_repassword").html("Password is not match");
		// 		e.preventDefault();
		// 		return false;
		// }

	return true;
		
	});

});

isValidEmailAddress=function(emailAddress) {
    var pattern = /^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i;

	    if(pattern.test(emailAddress))
	    {
	    	//alert("true");
	    	return true;
	    }
	    else
	    {
	    	//alert("false");
	    	return false;
	    }
}

isValidPhone=function(phone){
		var filter = /^[1-9]\d{2}\d{3}\d{4}$/;
		var result= filter.test(phone);
			if(result)
			{
				//alert("true");
				return true;
			}
			else
			{
				//alert("false");
				return false;
			}
}

isConfirmPass=function(pass1, pass2)
{
		if(pass1==pass2)
		{
			return true;
		}
		else
		{
			return false;
		}
}

 function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

   confirmReload=function()
   {
   		if(("#form_register").trigger("click"))
		{
			return false;
		}
		else
		{
			return true;
		}
   }
