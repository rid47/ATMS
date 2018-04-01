<div class="content-wrapper">
<!-- Content Header (Page header) -->

<section class="content-header">
<h1>

<b>Daily Pass Report</b> 

</h1>
</section>


<br/><br/>


<div class="table-responsive">
<table id="myTable" class="datatable table table-striped table-hover table-bordered" width="100%" >

 <thead >  
<tr >  
        <th scope="col">Date</th>
        <th scope="col">Time</th>
        <th scope="col">License</th>
        <th scope="col">Class</th>
        <th scope="col">Weight</th>
        <th scope="col">Bill</th>

</tr>  
</thead>  


<tbody>
   
    <?php  
         foreach ($h->result() as $row)  
         {  
            ?><tr>  
            <td><?php echo $row->date;?></td>  
            <td><?php echo $row->time;?></td>  
            <td><?php echo $row->license_no;?></td>
            <td><?php echo $row->class;?></td>  
            <td><?php echo $row->weight;?></td>  
            <td><?php echo $row->bill;?></td>
            </tr>  
         <?php }  
         ?>  
</tbody>
    

</table>
</div>
</div>

<script>
$(document).ready(function() {
		$('#myTable').dataTable();
                
		});
 </script>
