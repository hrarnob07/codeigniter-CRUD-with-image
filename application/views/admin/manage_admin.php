
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
								  <th>Admin Name</th>
								  <th>Admin Email</th>
								  <th>Admin phone</th>
								  <th>Admin Image</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>

						  	<?php 
						  			foreach ($manage_all_admin_info as  $data) {
						  				

						  	?>
							<tr>
								<td  class="center"><?php echo $data->admin_name ?></td>
								<td class="center"><?php echo$data->email_address ?></td>
								<td class="center"><?php echo $data->phone ?></td>
								<td class="center">
								<img src="<?php echo$data->admin_image ?>" style="height: 80px;width: 80px;">	
								</td>
								<td class="center">
									
									<a class="btn btn-info" href="">
										<i class="halflings-icon white edit"></i>  
									</a>
									<a class="btn btn-danger"  href="<?php echo base_url()?>delete_admin_info/<?php echo $data->admin_id ?>" >
										<i class="halflings-icon white trash"></i> 
									</a>
								</td>
							</tr>
								
								<?php }?>
					
						
						  </tbody>
					  </table>            
					</div>