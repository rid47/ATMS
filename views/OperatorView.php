
<div class="content-wrapper">
                <!-- Content Header (Page header) -->
                
			
		<section class="content-header">
                    <h1>
                       Operator Panel
                        
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active">Dashboard</li>
                    </ol>
                </section>


<div class="main-container">

				<!-- Container fluid Starts -->
				<div class="container-fluid">

					<!-- Current Stats Start -->
					<div class="current-stats">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="danger-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class A</small>
										<h3 class="no-margin no-padding">19%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="success-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class B</small>
										<h3 class="no-margin no-padding text-white">7%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="info-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class C</small>
										<h3 class="no-margin no-padding">16%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="brown-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class D</small>
										<h3 class="no-margin no-padding">5%</h3>
									</div>
								</div>
							</div>
							
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="linkedin-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class E</small>
										<h3 class="no-margin no-padding">14%</h3>
									</div>
								</div>
							</div>
							</div>
							<div class="row">
							
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="danger-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class F</small>
										<h3 class="no-margin no-padding">9%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="success-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class G</small>
										<h3 class="no-margin no-padding text-white">7%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="info-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class H</small>
										<h3 class="no-margin no-padding">23%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-2 col-md-4 col-sm-4 col-xs-6">
								<div class="brown-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class I</small>
										<h3 class="no-margin no-padding">11%</h3>
									</div>
								</div>
							</div>
							<div class="col-lg-3 col-md-4 col-sm-4 col-xs-6">
								<div class="linkedin-bg center-align-text">
									<div class="spacer-xs">
										<small class="text-white">Class J</small>
										<h3 class="no-margin no-padding">1%</h3>
									</div>
								</div>
							</div>
							
						</div>
					</div>
					<!-- Current Stats End -->
<!-- Row Starts -->
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="blog">
									<div class="blog-header">
										<h5 class="blog-title">Picture</h5>
									</div>
									<div class="blog-body">
										<video id="video" width="480"  height="320" autoplay></video>
                                                                                 <br>  <br>  <br>
                                                                                <button style="float: right;">
                                                                                
                                                                                
                                                                                <a id="snap" class="btn btn-default" download="LicencePlate.jpg" href="" onclick="download_img(this);">Take Picture</a></button>
                                                                               <br> <br>  <br>
										
										
									</div>
								</div>
							</div>
								<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" >
								<div class="blog" >
									<div class="blog-header">
										<h5 class="blog-title">In Process</h5>
									</div>
                                                                    
									<div class="blog-body">
                                                                            <br>
										<form enctype="multipart/form-data" action="<?php echo base_url('TransactionController/upload');?>" method="post" >
											<div class="form-group">
												<div class="row">
													<div class="col-md-8">
														<label class="control-label">License No</label>
														<input type="text" class="form-control" name="ln" />
													</div>
													<div class="col-md-4 selectContainer">
														<label class="control-label">Class</label>
													<select required="" id="SelectClass" name="class" class="form-control">
												<option value="">Select Class</option>
												<?php
													foreach ($class as $row)
													{ ?>
												<option value="<?=$row->class_name?>"><?=$row->class_name?></option>
												<?php }
												?>
											</select>
												</div>
                                                                                            <br>
											</div>	
											<div class="form-group">
												<div class="row">
												<div id="demo" style="display:none">	
                                                                                                    <br>
													 <div class="col-md-4">
														<label class="control-label">Vehicle Weight</label>
														<input type="text" class="form-control bl" id="vw" name="weight" />
														
													</div>
                                                                                                      <div class="col-md-4">
														<label class="control-label">MAX Weight</label>
                                                                                                                <input type="text" class="form-control " id="mx" readonly="true" />
														
													</div> 
                                                                                                     <div class="col-md-4">
														<label class="control-label">RPU</label>
                                                                                                                <input type="text" class="form-control" id="rpu" readonly="true" />
														
													</div> 
                                                                                                    <br>  <br>
												 </div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													
													<div  class="col-md-6">
														<label class="control-label">Date</label>
                                                                                                                <input type="text" class="form-control " id="datepick" name="date" value="" readonly="true"/>
                                                                                                                
                                                                                                                
													</div>
                                                                                                    <div class="col-md-6">
														<label class="control-label">Bill</label>
														<input  type="number" class="form-control sub" readonly="true" id="bill" name="bill" />
													</div>
													
												</div>
											</div>
                                                                                      <br> <br>
											<div class="form-group">
												<div class="row">
													
													<div class="col-md-6">
														<label class="control-label">Amount Paid</label>
														<input  type="number" class="form-control sub" id="amnt" name="amnt" />
													</div>
													
													<div class="col-md-6">
														<label class="control-label">Change</label>
                                                                                                                <p id="ch" class="form-control" readonly="true">  </p>
													</div>
													
												</div>
											</div>
											<br>  <br>
												<div class="col-md-6">
														<?php
                                                                                                                    if ($this->session->flashdata('fail_msg') != '') {
                                                                                                                        ?>
                                                                                                                        <br />
                                                                                                                        <div class="alert alert-danger text-center alert-dismissible">
                                                                                                                            <a href="<?php echo base_url() . 'registration'; ?>"  data-dismiss="alert" aria-label="close">&times;</a>
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
                                                                                                                            <a href="<?php echo base_url() . 'registration'; ?>"data-dismiss="alert" aria-label="close">&times;</a>
                                                                                                                            <strong><?php echo $this->session->flashdata('success_msg'); ?></strong>
                                                                                                                        </div>
                                                                                                                        <?php
                                                                                                                    }
                                                                                                                    ?>
													</div>
													<div class="col-md-3">
														
													</div>
                                                                                      
											<div class="col-md-1">
													<button type="submit"  class="btn btn-default">Print</button>
											</div>
                                                                                      <br>  <br>  <br>  
										</form>
									</div>
								</div>
							</div>
                                                </div>
                                                </div>
                                                    <div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="blog">
									<div class="blog-header">
										<h5 class="blog-title">Picture</h5>
									</div>
									<div class="blog-body">
										<canvas id="vehicalImage" name = "image" size = "20" width="480" height="320"></canvas>
                                                                              
									</div>
								</div>
							</div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                            
                                                        </div>
                                                </div>
                                                
					</div>
			</div>

</div>
<script>
		$(document).ready(function(){
			  $('#SelectClass').on('change', function() {
				  var data = $("#SelectClass").val()
				  if(data== 'D' || data== 'E'){
					  $("#demo").show() 
				  }
				 
			  else
			  {
				  $("#demo").hide() 
			  }
			  
			})
				  
			
			});
		
                    $(".sub").focusout(function() {
                $("#ch").html('');
                var num1 = $("#amnt").val();
                var num2 = $("#bill").val();
                var answer =  num1 - num2;
                $("#ch").html(answer);
            });
        
// Grab elements, create settings, etc.
var video = document.getElementById('video');

// Get access to the camera!
if(navigator.mediaDevices && navigator.mediaDevices.getUserMedia) {
    // Not adding `{ audio: true }` since we only want video now
    navigator.mediaDevices.getUserMedia({ video: true }).then(function(stream) {
        video.src = window.URL.createObjectURL(stream);
        video.play();
    });
}

// Legacy code below: getUserMedia 
else if(navigator.getUserMedia) { // Standard
    navigator.getUserMedia({ video: true }, function(stream) {
        video.src = stream;
        video.play();
    }, errBack);
} else if(navigator.webkitGetUserMedia) { // WebKit-prefixed
    navigator.webkitGetUserMedia({ video: true }, function(stream){
        video.src = window.webkitURL.createObjectURL(stream);
        video.play();
    }, errBack);
} else if(navigator.mozGetUserMedia) { // Mozilla-prefixed
    navigator.mozGetUserMedia({ video: true }, function(stream){
        video.src = window.URL.createObjectURL(stream);
        video.play();
    }, errBack);
}
var canvas = document.getElementById('vehicalImage');
var context = canvas.getContext('2d');
var video = document.getElementById('video');
var name=0;
// Trigger photo take
//function download() {
//	
//        
//       //var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");  // here is the most important part because if you dont replace you will get a DOM 18 exception.
//
//        //window.location.href=image; // it will save locally
//         var dt = canvas.toDataURL('image/jpeg');
//         this.href = dt;
//       
//};
//
//document.getElementById("snap").addEventListener("click",download,false);
download_img = function(el) {
    
    context.drawImage(video, 0, 0, 480, 320);
  var image = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
  el.href = image; 
  name=Math.floor((Math.random() * 99999999) + 1);;
 el.download = name+".png";

       
};
        
 function myFunction() {
     var d = new Date();
     var m=d.getMonth()+1;
var e=d.getFullYear()+"-"+m+"-"+d.getDate();


document.getElementById('datepick').value= e;
}
 
 
 
 $('#SelectClass').on('change', function(){
  
  //$("#demo").show();      
  var mainselection = this.value; // get the selection value
  $.ajax({
    type: "POST",  // method of sending data
    //url: "subcategory.php", // name of PHP script
    
    url:"http://localhost/tms/Welcome/user_data_submit",
    data:'selection='+mainselection, // parameter name and value
    success: function(result){ // deal with the results
       var obj = JSON.parse(result)
        
          $("#bill").val(obj[0].tariff);
        $("#rpu").val(obj[0].rpu);
         $("#mx").val(obj[0].max_weight);
          $(".bl").focusout(function() {
              
                $("#ch").html('');
                var vw=$("#vw").val();
                console.log(vw);
                if(vw>obj[0].max_weight)
                {   var b=0.0;
                   b= ((obj[0].tariff*1)+((vw-obj[0].max_weight)*obj[0].rpu));
                   $("#bill").val(b);
                }
               
            });
            
    }
    });
  });
</script>