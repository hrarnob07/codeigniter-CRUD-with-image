<div class="box-content">
	
	<form class="form-horizontal" action="<?php echo base_url()?>save_admin" method="post" enctype="multipart/form-data">
							<fieldset>

							
							  <div class="control-group">
								<label class="control-label" for="name">Admin Name</label>
								<div class="controls">
								  <input class="input-xlarge " id="name" type="text" name="admin_name" placeholder="name input here…" >
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="name">Admin Email</label>
								<div class="controls">
								  <input class="input-xlarge " id="name" type="text" name="email_address" placeholder="name input here…" >
								</div>
							  </div>

							  <div class="control-group">
								<label class="control-label" for="name">password</label>
								<div class="controls">
								  <input class="input-xlarge " id="name" type="text" name="password" placeholder="name input here…" >
								</div>
							  </div>
							  <div class="control-group">
								<label class="control-label" for="name">Phone</label>
								<div class="controls">
								  <input class="input-xlarge " id="name" type="text" name="phone" placeholder="name input here…" >
								</div>
							  </div>

							 <!--   <div class="control-group">
								<label class="control-label" for="focusedInput">Dept</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="This is dept">
								</div>
							  </div> -->
							
							  <div class="control-group">
								<label class="control-label" for="fileinput">Image</label>
								<div class="controls">
								  <input class="input-xlarge "  type="file" name="admin_image" placeholder="file input here…" >

								</div>
							  </div>

							  
							  
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save </button>
								
							  </div>
							</fieldset>
						  </form>
					
					</div>