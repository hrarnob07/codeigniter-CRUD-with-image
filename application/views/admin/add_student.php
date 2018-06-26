<div class="box-content">

          	             
      <div class="row">
	               <?php 

						$message=$this->session->userdata('message');
						if($message)
					    {  echo  "<span>$message</span>";
					    	$this->session->unset_userdata('message');
					    }

					 ?> 
	
	</div>
	<form class="form-horizontal" action="<?php echo base_url()?>save_student_data" method="post">
							<fieldset>
							  <!-- <div class="control-group">
								<label class="control-label" for="focusedInput">Student ID</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" value="student id…">
								</div>
							  </div> -->
							
							  <div class="control-group">
								<label class="control-label" for="disabledInput">Student Name</label>
								<div class="controls">
								  <input class="input-xlarge " id="disabledInput" type="text" name="student_name" placeholder="name input here…" >
								</div>
							  </div>

							   <div class="control-group">
								<label class="control-label" for="focusedInput">Dept</label>
								<div class="controls">
								  <input class="input-xlarge focused" id="focusedInput" type="text" name="student_dept" placeholder="dept...">
								</div>
							  </div>
							
							  <div class="control-group">
								<label class="control-label" for="disabledInput">CGPA</label>
								<div class="controls">
								  <input class="input-xlarge " id="disabledInput" type="text" name="student_cgpa" placeholder="cgpa input here…" >
								</div>
							  </div>

							  
							  
							  <div class="form-actions">
								<button type="submit" class="btn btn-primary">Save </button>
								
							  </div>
							</fieldset>
						  </form>
					
					</div>