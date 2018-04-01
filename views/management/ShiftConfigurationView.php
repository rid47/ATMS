<div class="content-wrapper">

<section class="content-header">
<h1><b>
Shift Create
</b>
</h1>
</section>
   
<section class="content-header">
<form class="form-horizontal" action="<?php echo base_url()."Management/ShiftConfigurationController/create"; ?>" method="post">
<div class="form-group" style="margin-left:55px">
<label class="control-label col-sm-4" >Shift Name:</label>
<div class="col-md-2 ">
<input type="text"  class="form-control" name="name">
</div>
</div>
	  
	  
<div class="form-group" style="margin-left:55px">
<label class="control-label col-sm-4">Start Time:</label>
<div class="col-md-2 ">
<input type="time"  class="form-control" name="st">	
</div>
</div>
	
<div class="form-group" style="margin-left:55px">
<label class="control-label col-sm-4">End Time:</label>
<div class="col-md-2 ">
<input type="time" class="form-control"  name="et">	
</div>
</div>
	  
	 
<div class="col-sm-6">

</div>

<div class="btn-group">
<input type="submit" class="btn btn-success" value="&ensp;&ensp;Save&ensp;&ensp;"></input>
</div>
</form> 
</section>
    

<section class="content-header">
<h1><b>
Shift Table
</b>
</h1>
</section>
<br/><br/><br/>
<section class="content-header">
<div class="table-responsive">
<table id="myTable" class="datatable table table-striped table-hover table-bordered" width="100%" >

 <thead >  
<tr >  
<th scope="col">Shift Name</th>
<th scope="col">Start Time</th>
<th scope="col">End Time</th>
<th scope="col">Option</th>

</tr>  
</thead>  
<tbody>
<?php  
foreach ($h->result() as $row)  
{  
?><tr id="row<?php echo $row->shift_id;?>">  
<td><?php echo $row->shift_name;?></td>  
<td><?php echo $row->shift_start_time;?></td>  
<td><?php echo $row->shift_end_time;?></td>

<td>
<a  href="#" class="list-inline" id="delete_button" data-toggle="tooltip" data-placement="right" title="delete"<?php echo $row->shift_id;?>" value="delete" onclick="delete_row('<?php echo $row->shift_id;?>');">
<span class="glyphicon glyphicon-trash"></span>
</a>    
</td>


</tr>  
<?php }  
?>  
</tbody>
    
</table>
</div>
</section>
</div>
<br/><br/><br/><br/>
<script>
$(document).ready(function() {
		$('#myTable').dataTable();
                
		});
                

function delete_row(id)
{
    
 $.ajax
 ({
  type:'post',
  url:'http://localhost/tms/Management/ShiftConfigurationController/deleteShift',
  data:'row_id='+id,
  
  success:function(response) {
   console.log(response);
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}
 </script>