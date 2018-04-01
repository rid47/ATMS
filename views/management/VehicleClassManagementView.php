<div class="content-wrapper">
    
    
<div class="btn-group">
<a href="<?=base_url('Management/ClassWiseTarrifController')?>" id="editable_table_new" class=" btn btn-info">
Class List</a>
</div>
     <section class="content-header">
         <h1><b>
                 Vehicle Class Category
                        </b>
                           </h1>
                    
                </section>
    
    
    <br><br>
    <?php
    if ($this->session->flashdata('fail_msg') != '') {
        ?>
        <br />
        <div class="alert alert-danger text-center alert-dismissible">
            
            <strong><?php echo $this->session->flashdata('fail_msg'); ?></strong>
        </div>
        <?php
    }
    ?>
        
    <?php
    if ($this->session->flashdata('success_msg') != '') {
        ?>
        <br />
        <div class="alert alert-success text-center alert-dismissible">
            
            <strong><?php echo $this->session->flashdata('success_msg'); ?></strong>
        </div>
        <?php
    }
    ?>
   
   <section class="content-header">
     <form class="form-horizontal" action="<?php echo base_url()."Management/VehicleClassManagementController/create"; ?>" method="post">
	   
         
         <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2" >Class:</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="ClassName"  required="" id="text" placeholder="EX: A">
		  </div>
                
         </div>    
         <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2">Custom Name:</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="CustomName"  id="text" placeholder="Enter Custom Name for Class">
		  </div>
	  </div>
         <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2">Description:</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="Description"  id="text" placeholder="Enter Vehicle Description">
		  </div>
	  </div>
         
         <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2">Vehicles:</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="Vehicles"  id="text" placeholder="Enter Vehicles">
		  </div>
	  </div>
          <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2">Tariff</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="tar" required="" id="text" placeholder="Ex: $10">
		  </div>
	  </div>
         <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2">Maximum Weight :</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="mw"  id="text" placeholder="EX: 1000KG">
		  </div>
	  </div>
          <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-2">Rate/Unit</label>
		<div class="col-sm-7">
	
		  <input type="text" class="form-control" name="rpu"  id="text" placeholder="EX:$5">
		  </div>
	  </div>
         
         
        
          

	  
         <br><br>
	<div class="col-sm-10">
	
	</div>
        <div class="btn-group">
	<input type="submit" class="btn btn-success" value="Save"></input>
	</div>		
	  
	  
</form> 
</section>
</div>