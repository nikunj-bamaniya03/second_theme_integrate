$(document).ready(function(){

    // Validation for Admin Register Form
    $('#admin_Register_Form').validate({
        rules:{
            first_name:{
                required: true,
                maxlength: 50
            },
            last_name:{
                required: true,
                maxlength: 50
            },
            email:{
                required: true,
                email: true,
                maxlength: 100,
                unique: true
            },
            password:{
                required: true,
                minlength: 8,
                confirmed: true
            },
            password_confirmation:{
                required: true,
                minlength: 8,
                equalTo: '#exampleInputPassword'
            }
        },
        messages:{
            first_name:{
                required: "First name is required.",
                maxlength: "First name may not be greater than 50 characters."
            },
            last_name:{
                required: "Last name is required.",
                maxlength: "Last name may not be greater than 50 characters."
            },
            email:{
                required: "Email is required.",
                email: "Please enter a valid email address.",
                maxlength: "Email may not be greater than 100 characters.",
                unique: "This email is already registered."
            },
            password:{
                required: "Password is required.",
                minlength: "Password must be at least 8 characters long",
                confirmed: "Password confirmation does not match"
            },
            password_confirmation:{
                required: "Password confirmation is required.",
                equalTo: "Password confirmation must match the password.",
            }
        },
        errorClass: "text-danger"
    });


    // Validation for Admin Login Form

    $('#admin_Login_Form').validate({
        rules:{
            email:{
                required: true,
                email: true,
                maxlength: 100
            },
            password:{
                required: true,
                minlength: 8
            },
        },
        messages:{
            email:{
                required: "Please enter email",
                email: "Please enter valid email",
                maxlength: "Email cannot exceed 100 characters"
            },
            password:{
                required: "Please enter password",
                minlength: "Password must be at least 8 characters long"
            },
        },
        errorClass: "text-danger"
    });
    
});
