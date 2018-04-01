<div class="content-wrapper">
    
    
    <div class="btn-group">
<a href="<?=base_url('Management/VehicleClassManagementController')?>" id="editable_table_new" class=" btn btn-info">
Create New  <i class="fa fa-plus"></i>
</a>
</div>

     <section class="content-header">
         <h1><b>
                 Tariff Management
                        </b>
                           </h1>
                    
                </section>
    
    
    <br><br>
    
 
    <div class="table-responsive">
<table id="myTable" class="datatable table table-striped table-hover table-bordered" width="100%" >

 <thead >  
          <tr >  
                   <th scope="col">Class</th>
                  <th scope="col">Description</th>
                  <th scope="col">Maximum Weight</th>
                  <th scope="col">Rate/Unit</th>
                  <th scope="col">Tariff</th>
      
          </tr>  
        </thead>  
        <tbody>
   <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->class_name;?></td>  
            <td><?php echo $row->class_description;?></td>  
            
            <?php if($row->max_weight<1){?><td>N/A</td><?php }?>
             <?php if($row->max_weight>0){?><td><?php echo $row->max_weight;?></td><?php }?>
          
            <?php if($row->rpu<1){?><td>N/A</td><?php }?>
             <?php if($row->rpu>0){?><td><?php echo $row->rpu;?></td><?php }?>
             
            
            <td><?php echo $row->tariff;?></td>
            </tr>  
         <?php }  
         ?>  
  </tbody>
    

</table>
</div>
    
    
    
    
    
    
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
     <form class="form-horizontal" action="<?php echo base_url()."Management/ClassWiseTarrifController/updateTariff"; ?>" method="post">
	   
         
         <div class="form-group" style="margin-left:35px">
		<label class="control-label col-sm-1" >Class:</label>
		<div class="col-sm-3 ">
				
             	<select required="" id="SelectClass" name="class" class="form-control">
												<option value="">Select Class</option>
												<?php
													foreach ($h->result() as $row)
													{ ?>
												<option value="<?=$row->class_name?>"><?=$row->class_name?></option>
												<?php }
												?>
											</select>
			
	  </div>
                
         </div>    
         <div class="form-group" style="margin-left:35px">
		<label class="control-label col-sm-1">Tariff:</label>
		<div class="col-sm-3">
	
		  <input type="text" class="form-control" name="Tariff" namerequired id="text" placeholder="USD">
		  </div>
	  </div>
         
         
          
	<div class="col-sm-3">
	
	</div>
        <div class="btn-group">
	<input type="submit" class="btn btn-success" value="Save"></input>
<br> <br><br><br><br><br><br>
        </div>		
	  
         
	  
	  
</form> 
</section>
</div>


<script>
$(document).ready(function() {
		$('#myTable').dataTable();
                
		});
 </script>

		
		

  
