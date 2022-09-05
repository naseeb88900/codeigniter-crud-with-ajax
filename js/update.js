
$("#update_process").validate({

    rules: {
        name: "required",

        password: {
            required: true,
            minlength: 5
        },

        repass : {
            required: true,
            minlength : 5,
            equalTo : "#password"
        },
        email: {
            required: true,
            email: true
        },
        phone: {
            required: true,
            number: true
        },
        age: {
            required: true,
            number: true
        }

    },

    messages : {
        name : "Please Enter your name&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",
      
        password: {
            required: "Please Provide a password&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",
            minlength: "Password must be at least 5 characters long&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"
        },
      
        repass: {
            required: "Confirm Password to update&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",
            minlength: "Password must be at least 5 characters long&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",
            equalTo : "Please enter same password as above&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"
        },

        email: {
            required: "Please Enter your Email&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",
            email: "The email should be in the format: abc@domain.tld"
        },
        phone: {
            required:"Phone Number is required&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",
            number: "Phone number must be a number&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",
            min: "Phone must be at least 10 characters long&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;"
        },
        age:{
            required: "Age is required&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;",

        }

    },
});


