<div class="content-wrapper">
    
     <section class="content-header">
         <h1><b>
                 Plaza Configuration
                        </b>
                           </h1>
                    
                </section>
   
   <section class="content-header">
     <form class="form-horizontal" action="<?php echo base_url()."Management/PlazaConfigurationController/create"; ?>" method="post">
	   <div class="form-group" style="margin-left:55px">
		<label class="control-label col-sm-4" >Plaza Name:</label>
			<div class="col-md-2 ">
				 <input type="text"  class="form-control" name="name">
			</div>
	</div>
	  

	  
	 
		<div class="col-sm-8">
		
		</div>
		<div class="btn-group">
				  <input type="submit" class="btn btn-success" value="Save"></input>
	  </div>
	  
	  
</form> 
</section>
</div>