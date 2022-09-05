
	
<?php
				$user = $this->session->userdata('user');
				extract($user);
			?>
				<form name = "update_process"  id="updateprocess" action="" method="post">
			<div class="modal-body">
			
						<div class="form-group">
							
							<input type="text" placeholder="Student Name" id="name" name="name" value="<?php echo $user_name; ?>" class="form-control"/>
							<p class="nameError"></p>
						</div>
						<div class="form-group">
							
							<input type="text" placeholder="Student Phone" id="phone" name="phone" value="<?php echo $user_phone; ?>"  class="form-control"/>
							<p class="phoneError"></p>
						</div>
						<div class="form-group ">
							
							<input type="email" placeholder="Student Email" id="email" readonly="readonly" name="email" value="<?php echo $user_email; ?>" class="form-control"/>
							<p class="alert alert-success">Can't update email</p>
						</div>
						<div class="form-group">
							
							<input type="number" placeholder="Student Age" id="age" name="age" value="<?php echo $user_age; ?>" class="form-control"/>
							<p class="ageError"></p>
						</div>
                        <div class="form-group ">
							
							<input type="password" placeholder="Password" id="password" name="password"  value="<?php echo $user_password; ?>" class="form-control"/>
							<p class="passwordError"></p>
						</div>
						<div class="form-group">
							
							<input type="password" placeholder="Retype Password" id="repass" name="repass" class="form-control"/>
							<p class="repassError"></p>
						</div>
			
			
	
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary mx-auto d-block" >Save changes</button>
      </div>
	  
	  </div>
				</form>
	

	
 

</body>
</html>

