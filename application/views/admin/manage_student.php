
<?php 

$message=$this->session->userdata('message');
if($message)
{  echo  $message;
	$this->session->unset_userdata('message');
}
?> 

<div class="box-content">



						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Student Id</th>
								  <th>Student Name</th>
								  <th>Dept</th>
								  <th>Cgpa</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  	<?php 
						  			foreach ($all_student_info as  $data) {
						  				

						  	?>
							<tr>
								<td  class="center"><?php echo $data->student_id ?></td>
								<td class="center"><?php echo$data->student_name ?></td>
								<td class="center"><?php echo $data->student_dept ?></td>
								<td class="center">
									<span class="label label-success"><?php echo$data->student_cgpa ?></span>
								</td>
								<td class="center">
									
									<a class="btn btn-info" href="<?php echo base_url()?>edit_student_info/<?php echo $data->student_id ?>">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger"  href="<?php echo base_url()?>delete_student_info/<?php echo $data->student_id ?>" >
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
								
								<?php }?>
					
						
						  </tbody>
					  </table>            
					</div>