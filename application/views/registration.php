<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Student Login Form</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url(); ?>css/registration.css">
</head>

<body>

	<div class="container">
	<div class="d-flex justify-content-center">
		<div class="card mt-5 col-md-5 animated bounceInDown myForm">
			<div class="card-header">
				<h4>Students Contact Details</h4>
			</div>
			<div class="card-body">
				<form name="RegistrationForm" id="RegistrationForm" action="<?php echo base_url(); ?>user/register_process" method="post">
					<div id="dynamic_container">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-user-graduate"></i></span>
							</div>
							<input type="text" placeholder="Student Name" id="name"  name="name"  class="form-control"/>
							<p class="nameError"></p>
						</div>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-phone-square"></i></span>
							</div>
							<input type="text" placeholder="Student Phone" id="phone"  name="phone"  class="form-control"/>
							<p class="phoneError"></p>
						</div>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-at"></i></span>
							</div>
							<input type="email" placeholder="Student Email"  id="email" name="email" class="form-control"/>
							<p class="emailError">
						</div>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-calendar-alt"></i></span>
							</div>
							<input type="number" placeholder="Student Age" id="age" name="age" class="form-control"/>
							<p class="ageError"></p>
						</div>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" placeholder="Password" id="password" name="password"  class="form-control"/>
							<p class="passwordError"></p>
						</div>
						<div class="input-group mt-3">
							<div class="input-group-prepend">
								<span class="input-group-text br-15"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" placeholder="Retype Password" id="repass" name="repass" class="form-control"/>
							<p class="repassError"></p>
						</div>
						
							<div class="card-footer">	
							</div>
							<input type="submit" id="submit" class="btn btn-primary btn-block" name="submit" placeholder="Sign Up" />
							<div class="card-footer">
							<br><p class="text-center">Back to Login?</p>
							</div><a href="<?php echo base_url(); ?>user/logout" id="login" class="btn btn-primary">Login</a>
					</div>
				</form>
			</div>
			
		</div>
	</div>
	</div>


<!-- Modal For Registration  Errors-->
<div class="modal fade" id="registerModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
        <button type="button" class="close" id="regclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
		
	
	  
	  </div>
   

    </div>
  </div>
</div>

<!-- Modal For Registration  Success-->
<div class="modal fade" id="registerModelsuccess" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
        <button type="button" class="close" id="regclosesuccess"  onclick="window.location.href='<?php echo base_url(); ?>user/logout'"  data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
		

	  
	  </div>
   

    </div>
  </div>
</div>
<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
    <script src="http://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
	<script type="text/javascript">

		 $("body").on("submit","#RegistrationForm",function(e){
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url(); ?>user/register_process',
            type: 'POST',
            data: $(this).serializeArray(),
            dataType: 'json',
            success: function(response)
            {
                if(response['status'] == 0)
                {
                    if(response['name'] != "")
                    {
                        $('.nameError').html(response['name']).addClass('invalid-feedback d-block');
                        $('#name').addClass('is-invalid');
                    }
                    else{
                        $('.nameError').html("").removeClass('invalid-feedback d-block');
                        $('#name').removeClass('is-invalid');
                    }

                    if(response['phone'] != "")
                    {
                        $('.phoneError').html(response['phone']).addClass('invalid-feedback d-block');
                        $('#phone').addClass('is-invalid');
                    }
                    else{
                        $('.phoneError').html("").removeClass('invalid-feedback d-block');
                        $('#phone').removeClass('is-invalid');
                    }

                    if(response['email'] != "")
                    {
                        $('.emailError').html(response['email']).addClass('invalid-feedback d-block');
                        $('#email').addClass('is-invalid');
                    }
                    else{
                        $('.emailError').html("").removeClass('invalid-feedback d-block');
                        $('#email').removeClass('is-invalid');
                    }

                    if(response['age'] != "")
                    {
                        $('.ageError').html(response['age']).addClass('invalid-feedback d-block');
                        $('#age').addClass('is-invalid');
                    }
                    else{
                        $('.ageError').html("").removeClass('invalid-feedback d-block');
                        $('#age').removeClass('is-invalid');
                    }

                    if(response['password'] != "")
                    {
                        $('.passwordError').html(response['password']).addClass('invalid-feedback d-block');
                        $('#password').addClass('is-invalid');
                    }
                    else{
                        $('.passwordError').html("").removeClass('invalid-feedback d-block');
                        $('#password').removeClass('is-invalid');
                    }

                    if(response['repass'] != "")
                    {
                        $('.repassError').html(response['repass']).addClass('invalid-feedback d-block');
                        $('#repass').addClass('is-invalid');
                    }
                    else{
                        $('.repassError').html("").removeClass('invalid-feedback d-block');
                        $('#repass').removeClass('is-invalid');
                    }

                }
				else if(response['status'] == -1)
				{
					$("#registerModel .modal-body").html(response["message"]);
                    $("#registerModel").modal("show");
				}
				else if(response['status'] == -2)
				{
					$("#registerModel .modal-body").html(response["message"]);
                    $("#registerModel").modal("show");
				}
                else{
                    $("#registerModelsuccess .modal-body").html(response["message"]);
                    $("#registerModelsuccess").modal("show");

           
                    $('.nameError').html("").removeClass('invalid-feedback d-block');
                    $('#name').removeClass('is-invalid');

                    $('.phoneError').html("").removeClass('invalid-feedback d-block');
                    $('#phone').removeClass('is-invalid');

                    $('.emailError').html("").removeClass('invalid-feedback d-block');
                    $('#email').removeClass('is-invalid');

                    $('.ageError').html("").removeClass('invalid-feedback d-block');
                    $('#age').removeClass('is-invalid');

                    $('.passwordError').html("").removeClass('invalid-feedback d-block');
                    $('#password').removeClass('is-invalid');

                    $('.repassError').html("").removeClass('invalid-feedback d-block');
                    $('#repass').removeClass('is-invalid');

                  
                }
            }
        })
     });

	 $('#regclose').click(function() {
       $('#registerModel').modal('hide');
});


	</script>
</body>
</html>

