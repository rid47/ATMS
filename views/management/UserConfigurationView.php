              

<div class="content-wrapper">
                <!-- Content Header (Page header) -->
                 <div class="btn-group">
                                        <a href="<?=base_url('Management/UserCreationController')?>" id="editable_table_new" class=" btn btn-info">
                                        Create User  <i class="fa fa-plus"></i>
                                    </a>
                                    </div>
                <section class="content-header">
                    <h1>
                        User Configuration
                        
                    </h1>
                    
                </section>
                
           <br><br>     
               
  
        <div class="table-responsive">
<table id="myTable" class="datatable table table-striped table-hover table-bordered" width="100%" >

 <thead >  
          <tr >  
               <th scope="col">Name</th>
               <th scope="col">Email</th>
               <th scope="col">User Name</th>
               <th scope="col">Role</th>
               <th scope="col">Option</th>
          </tr>  
        </thead>  
        <tbody>
  <?php  
         foreach ($user_information as $row)  
         {  
            ?>
            <tr id="row<?php echo $row->user_id;?>">
              <td id="name<?php echo $row->user_id;?>"><?php echo $row->employee_name;?></td>
              <td id="email<?php echo $row->user_id;?>"><?php echo $row->email;?></td>
              <td id="uname<?php echo $row->user_id;?>"><?php echo $row->user_name;?></td>
               <?php if($row->role==1){?><td>Super Admin</td><?php }?>
             <?php if($row->role==2){?><td>Admin</td><?php }?>
             <?php if($row->role==3){?><td>Operator</td><?php }?>
              <td>
             
               <a href="#"  id="edit_button<?php echo $row->user_id;?>" value="edit" data-toggle="tooltip" data-placement="right" title="Edit" onclick="edit_row('<?php echo $row->user_id;?>');">
          <span class="glyphicon glyphicon-edit"></span>|
        </a>
          <a href="#"  id="save_button<?php echo $row->user_id;?>" value="save" data-toggle="tooltip" data-placement="right" title="Save" onclick="save_row('<?php echo $row->user_id;?>');">
          <span class="glyphicon glyphicon-floppy-disk"></span>|
        </a>
               <a  href="#" id="delete_button<?php echo $row->user_id;?>" value="delete" data-toggle="tooltip" data-placement="right" title="Delete" onclick="delete_row('<?php echo $row->user_id;?>');">
          <span class="glyphicon glyphicon-trash"></span>
        </a>
              
              </td>
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
    function edit_row(id)
            {
               
 var name=document.getElementById("name"+id).innerHTML;
 var email=document.getElementById("email"+id).innerHTML;
 var uname=document.getElementById("uname"+id).innerHTML;

 document.getElementById("name"+id).innerHTML="<input type='text' id='name_text"+id+"' value='"+name+"'>";
 document.getElementById("email"+id).innerHTML="<input type='text' id='email_text"+id+"' value='"+email+"'>";
 document.getElementById("uname"+id).innerHTML="<input type='text' id='uname_text"+id+"' value='"+uname+"'>";
 
 $("#edit_button"+id).hide();

}

function delete_row(id)
{
    
 $.ajax
 ({
  type:'post',
  url:'http://localhost/tms/Management/UserConfigurationController/deleteUser',
  data:'row_id='+id,
  
  success:function(response) {
   if(response=="success")
   {
    var row=document.getElementById("row"+id);
    row.parentNode.removeChild(row);
   }
  }
 });
}



function save_row(id)
{
   
 var name=document.getElementById("name_text"+id).value;
 var email=document.getElementById("email_text"+id).value;
 var uname=document.getElementById("uname_text"+id).value;
 

	
 $.ajax
 ({
  type:'post',
  url:'http://localhost/tms/Management/UserConfigurationController/editUser',
  
  data:{
   
   row_id:id,
   name:name,
   email:email,
   uname:uname
  },
  success:function(response) {
   if(response=="success")
   {
    document.getElementById("name"+id).innerHTML=name;
    document.getElementById("email"+id).innerHTML=email;
     document.getElementById("uname"+id).innerHTML=uname;
      $("#edit_button"+id).show();
   }
  }
 });
}</script>

		
		

  
