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
            else if(response['status'] == 0){
           
              window.location = "<?php echo base_url(); ?>dashboard";
            }
        }
    })

   });

   $('#closemodal').click(function() {
   $('#loginModel').modal('hide');
});