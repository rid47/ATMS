
            <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
   <section class="content-header">
       <?php
    if ($this->session->flashdata('fail_msg') != '') {
        ?>
        <br />
        <div class="alert alert-danger text-center alert-dismissible">
            <a href="<?php echo base_url() . 'password'; ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $this->session->flashdata('fail_msg'); ?></strong>
        </div>
        <?php
    }
    ?>
        
    <?php
    if ($this->session->flashdata('success_mess') != '') {
        ?>
        <br />
        <div class="alert alert-success text-center alert-dismissible">
            <a href="<?php echo base_url() . 'password'; ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong><?php echo $this->session->flashdata('success_mess'); ?></strong>
        </div>
        <?php
    }
    ?>
       <form class="form-horizontal" action=<?php echo base_url('AccountSettingsController/changePass');?> method="post">
	 
	  
	
		
			  <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" for="email">Old Password :</label>
		<div class="col-sm-7">
	
		  <input type="password" name="op" required class="form-control" id="text" placeholder="Enter Previous Password">
		  </div>
	  </div>
	  
	  <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" for="email">New Password :</label>
		<div class="col-sm-7">
	
		  <input required type="password" name="np" class="form-control" id="password" placeholder="Enter Password">
		  </div>
	  </div>
	  	  <div class="form-group" style="margin-left:55px">
			<label class="control-label col-sm-2"  for="email">Confirm Password:</label>
			<div class="col-sm-7">
		
			  <input type="password" required name="cp" class="form-control" id="password" placeholder="Enter Retype Password">
			</div>
		</div>
		<div class="col-sm-8">
		
		</div>
		<div class="btn-group">
				  <input type="submit" class="btn btn-primary" value="Save"></input>
	  </div>
	  
	  
</form> 
</section>
</div>
