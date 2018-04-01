<?php 
//echo '<pre>'; print_r($operator); die();
?>
<div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1><b>Shift Assign</b>
                        
                        
                    </h1>
                    
                </section>
                
                
                
                <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6" >
								<div  >
									
                                                                    
									<div class="blog-body">
                                                                            <br>

        
                                                                                    <?php
                                                                                    if ($this->session->flashdata('success_msg') != '') {
                                                                                        ?>
                                                                                        <br />
                                                                                        <div class="alert alert-success text-center alert-dismissible">
                                                                                            <a href="<?php echo base_url() . 'password'; ?>" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                                                                            <strong><?php echo $this->session->flashdata('success_msg'); ?></strong>
                                                                                        </div>
                                                                                        <?php
                                                                                    }
                                                                                    ?>
										<form enctype="multipart/form-data" action="<?php echo base_url('Management/ShiftAssignmentController/create');?>" method="post" >
											<div class="form-group">
												<div class="row">
													
													<div class="col-md-4 selectContainer">
														<label class="control-label">Operator Name</label>
														<select required="" name="oid" class="form-control">
												<option value="">Select Employee</option>
												<?php
													foreach ($operator as $row)
													{ ?>
												<option value="<?=$row->user_id?>"><?=$row->user_name?></option>
												<?php }
												?>
											</select>
													</div>
												</div>
                                                                                            
											</div>	
											
											<div class="form-group">
												<div class="row">
													
													<div  class="col-md-4">
														<label class="control-label">Date</label>
                                                                                                                <input type="date" class="form-control " required="" id="datepick" name="date" value="" />
                                                                                                                
                                                                                                                
													</div>
                                                                                                    
													
												</div>
											</div>
                                                                                      <div class="form-group">
												<div class="row">
													
													<div class="col-md-4 selectContainer">
														<label class="control-label">Shift</label>
														<select required="" name="sid" class="form-control">
												<option value="">Select Shift</option>
												<?php
													foreach ($shift as $row)
													{ ?>
												<option value="<?=$row->shift_id?>"><?=$row->shift_name?></option>
												<?php }
												?>
											</select>
													</div>
												</div>
                                                                                            
											</div>	
                                                                                    <div class="form-group">
												<div class="row">
													
													<div class="col-md-4 selectContainer">
														<label class="control-label">Lane</label>
														<select required="" name="lid" class="form-control">
												<option value="">Select Lane</option>
												<?php
													foreach ($lane as $row)
													{ ?>
												<option value="<?=$row->lane_id?>"><?=$row->lane_name?></option>
												<?php }
												?>
											</select>
													</div>
												</div>
                                                                                            
											</div>	
											 <div class="form-group">
												<div class="row">
													
													<div class="col-md-4 selectContainer">
														<label class="control-label">Plaza</label>
														<select required="" name="pid" class="form-control">
												<option value="">Select Plaza</option>
												<?php
													foreach ($plaza as $row)
													{ ?>
												<option value="<?=$row->plaza_id?>"><?=$row->plaza_name?></option>
												<?php }
												?>
											</select>
													</div>
												</div>
                                                                                             <br>
                                                                                             <div class="col-md-6">
													
											</div>
											<div class="col-md-6">
													<button type="submit"  class="btn btn-success">&ensp; Save &ensp;   </button>
											</div>
												
												</div>	
                                                                                      
											
                                                                                      
										</form>
									
								</div>
							</div>
                                                </div>
</div>