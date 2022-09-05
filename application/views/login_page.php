<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
    <!-- jQuery library -->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/StyleSheet.css">

</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card" style="height: 28rem;">
			<div class="card-header">
				<h3 style="text-align:center;">Sign In</h3>
				
			</div>
			<div class="card-body">
				<form id="LoginForm" name="LoginForm" action="<?php echo base_url(); ?>user/login" method="post">
					<div class="input-group form-group">
						
                        <label>
                            <input type="email" class="form-control" size="30" name="email" placeholder="Email" >
                        </label>

                    </div>
					<div class="input-group form-group ">
						
                        <label>
                            <input type="password" class="form-control"  size="30" name="password" placeholder="Password">
                        </label>
                    </div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn login_btn mx-auto d-block" >
					</div>
					<div class="card-footer">
				<div class="d-flex justify-content-center links">
					<a href="<?php echo base_url(); ?>registration" class="btn btn-primary"><strong>Register Now</strong></a>
				</div>
			</div>
				</form>
			</div>
			
		</div>
	</div>
</div>


<!-- Modal For Login Errors-->
<div class="modal fade" id="loginModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
        <button type="button" class="close" id="closemodal" data-dismiss="modal" aria-label="Close">
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
		   $("body").on("submit","#LoginForm",function(e){
        e.preventDefault();
        $.ajax({
            url: '<?php echo base_url(); ?>user/login',
            type: 'POST',
            data: $(this).serializeArray(),
            dataType: 'json',
            success: function(response)
            {
                if(response['status'] == 1)
                {
                  $("#loginModel .modal-body").html(response["message"]);
                  $("#loginModel").modal("show");

                }
                else if(response['status'] == -1){
                  $("#loginModel .modal-body").html(response["message"]);
                  $("#loginModel").modal("show");
                  
                }
                else if(response['status'] == -2)
                {
                  $("#loginModel .modal-body").html(response["message"]);
                  $("#loginModel").modal("show");
                }
                else if(response['status'] == 0){
               
                  window.location = "<?php echo base_url(); ?>dashboard";
                }
            }
        })

       });

       $('#closemodal').click(function() {
       $('#loginModel').modal('hide');
});
	</script>

</body>
</html>