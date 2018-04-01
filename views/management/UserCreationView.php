<div class="content-wrapper">
   <div class="btn-group">
                                        <a href="<?=base_url('Management/UserConfigurationController')?>" id="editable_table_new" class=" btn btn-info">
                                    <i class="glyphicon glyphicon-arrow-left"></i>  Back to List</a>
                                    </div>
   <section class="content-header">
       
       <h1 ><b>
                        Create User
                        
           </b> </h1>
       
       </br></br></br></br>
        
     <form class="form-horizontal" action="<?php echo base_url()."Management/UserCreationController/create"; ?>" method="post">
	  <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" for="email">Employee Name:</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="name" required id="text" placeholder="Enter Name">
		  </div>
	  </div>
	  
	  
	  
	
	  <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" for="pwd">User Role:</label>
			<div class="col-md-2 selectContainer">
				<select class="form-control" name="role">
					<option value="2">Admin</option>
					<option value="3">Operator</option>
                                        <option value="1">Super Admin</option>
														
			    </select>
			</div>
	</div>
		
			  <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" for="email">Email :</label>
		<div class="col-sm-7">
	
		  <input type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required class="form-control" name="mail" id="text" placeholder="Enter Email">
		  </div>
	  </div>
	  <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" for="email">User Name:</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="uname" namerequired id="text" placeholder="Enter User Name">
		  </div>
	  </div>
	  <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" for="email">Password :</label>
		<div class="col-sm-7">
	
		  <input required type="password" class="form-control" id="password" name="password" placeholder="Enter Password">
		  </div>
	  </div>
	  	  <div class="form-group" style="margin-left:55px">
			<label class="control-label col-sm-2" for="email">Retype Password:</label>
			<div class="col-sm-7">
		
			  <input type="password" required class="form-control" id="password" name="re_password" placeholder="Enter Retype Password">
			</div>
		</div>
		<div class="col-sm-8"><div class="col-sm-4">
		 <?php
                                                                                    if ($this->session->flashdata('success_msg') != '') {
                                                                                        ?>
                                                                                        <br />
                                                                                        <div class="alert alert-success text-center alert-primary">
                                                                                            
                                                                                            <strong><?php echo $this->session->flashdata('success_msg'); ?></strong>
                                                                                        </div>
                                                                                        <?php
                                                                                    }
                                                                                    ?>
                     <?php
                                                                                    if ($this->session->flashdata('fail_msg') != '') {
                                                                                        ?>
                                                                                        <br />
                                                                                        <div class="alert alert-danger text-center alert-primary">
                                                                                            
                                                                                            <strong><?php echo $this->session->flashdata('fail_msg'); ?></strong>
                                                                                        </div>
                                                                                        <?php
                                                                                    }
                                                                                    ?></div>
		</div>
                                                                    
                        <div class="btn-group">
				  <input type="submit" class="btn btn-success" value="Save"></input>
                                  </div>
	 
</form> 
</section>
</div>