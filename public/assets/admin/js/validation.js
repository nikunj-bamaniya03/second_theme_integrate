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
                maxlength: 100
            },
            password:{
                required: true,
                minlength: 8,
            },
            password_confirmation:{
                required: true,
                equalTo: '#exampleInputPassword'
            }
        },
        messages:{
            first_name:{
                required: "Please enter first name",
                maxlength: "First name cannot exceed 50 characters"
            },
            last_name:{
                required: "Please enter last name",
                maxlength: "Last name cannot exceed 50 characters"
            },
            email:{
                required: "Please enter email",
                email: "Please enter valid email",
                maxlength: "Email cannot exceed 100 characters"
            },
            password:{
                required: "Please enter password",
                minlength: "Password must be at least 8 characters long"
            },
            password_confirmation:{
                required: "Please enter repeat password",
                equalTo: "Repeat password must match password"
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
