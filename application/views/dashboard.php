<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
     <link rel="stylesheet" href="<?php echo base_url(); ?>css/dashboard.css" />
    <title>Dashboard</title>
<body>
<?php
	$user = $this->session->userdata('user');
	extract($user);
?>
<div class="container">
    <div class="main-body">
        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                            <div class="mt-3">
                                <h4> <p class="dashName" ><?php echo $user_name; ?><p></h4>
                                <p class="text-secondary mb-1">Full Stack Developer</p>
                                <p class="text-muted font-size-sm">Bay Area, San Francisco, CA</p>
                                <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button>
                            </div>
                        </div>
                    </div>
                </div>
               
            </div>
            <div  class="col-md-8">
			
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Full Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p class="dashName"><?php echo $user_name; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                               <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                            <p class="dashEmail"><?php echo $user_email; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p class="dashPhone"><?php echo $user_phone; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Age</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <p class="dashAge"><?php echo $user_age; ?></p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <a class="btn btn-info "  href="javascript:void(0);" onclick="showModel()">Edit</a>
                                <a class="btn btn-info btn-danger "  href="javascript:void(0);" onclick="confirmDelete('<?php echo $user['user_email']?>');"> Delete</a>
                                <a class="btn btn-info btn-warning " href="<?php echo base_url(); ?>user/logout">Logout</a>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row gutters-sm">
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 mb-3">
                        <div class="card h-100">
                            <div class="card-body">
                                <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                                <small>Web Design</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Website Markup</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>One Page</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Mobile Template</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                                <small>Backend API</small>
                                <div class="progress mb-3" style="height: 5px">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>

    </div>
</div>

<!-- Modal For updation-->
<div class="modal fade opacity-75 bg-dark"  id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit your information</h5>
        <button type="button" class="close" id="updIconclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div id="response">

    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary mx-auto d-block" id="updclose" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal For Success Message-->
<div class="modal fade" id="success" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Alert</h5>
        <button type="button" class="close" id="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
		
			
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
	  
	  </div>
   

    </div>
  </div>
</div>

<!-- Model for Deletion -->
<div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog " role="document">
    <div class="modal-content ">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Confirm Delete</h5>
        <button type="button" class="close" id="iconclose" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <div class="modal-body">
		
			
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" id="delclose" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-danger" onclick="deleteNow()" >Yes</button>
      </div>
	  
	  
   

    </div>
  </div>
</div>


<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="<?php echo base_url(); ?>js/jquery-3.6.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script type="text/javascript">
    function showModel() { 
        $("#exampleModal").modal("show");

        $.ajax({
            url: '<?php echo base_url(); ?>user/update',
            type: 'POST',
            data: {},
            dataType: 'json',
            success: function(response)
            {
      
                $("#response").html(response['html']);
            }
        })
     }

     $("body").on("submit","#updateprocess",function(e){
        e.preventDefault();

        $.ajax({
            url: '<?php echo base_url(); ?>user/update_process',
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
                else if(response['status'] == -2)
                {
                    $('#password').addClass('is-invalid');
                    $('.repassError').html(response["message"]).addClass('invalid-feedback d-block');
                    $('#repass').addClass('is-invalid');
                }
                else{
                    
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

                    
                    window.location = "<?php echo base_url(); ?>dashboard";
                  
                }
            }
        })
     });

     function confirmDelete(email)
     {
        $("#deleteModel").modal("show");
        $("#deleteModel .modal-body").html("Are you sure you want to delete this record?");
        $("#deleteModel").data('email',email);
       
     }

     function deleteNow()
     {
        var email =  $("#deleteModel").data('email');
        
        $.ajax({
            url: '<?php echo base_url(); ?>user/delete/'+ 'email',
            type: 'POST',
            data: $(this).serializeArray(),
            dataType: 'json',
            success: function(response)
            {
                if(response['status'] == 1)
                {   
                    $("#deleteModel").modal("hide");
                    $("#deleteModel .modal-body").html(response["msg"]);
                    $("#deleteModel").modal("show");
                    window.location = "<?php echo base_url(); ?>user/logout";
                }
                else {
                    $("#deleteModel").modal("hide");
                    $("#deleteModel .modal-body").html(response["msg"]);
                    $("#deleteModel").modal("show");
                }
            }
     });
     }

     $('#updIconclose').click(function() {
$('#exampleModal').modal('hide');
});

$('#updclose').click(function() {
$('#exampleModal').modal('hide');
});

     $('#iconclose').click(function() {
       $('#deleteModel').modal('hide');
});

$('#delclose').click(function() {
$('#deleteModel').modal('hide');
});
</script>
</body>
</html>