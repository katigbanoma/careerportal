<?php include_once('header.php'); ?>
<div class="container">
<script type="text/javascript" src="../js/add_field_ref.js"></script>
	<form method="post" action="../Servers/dbinputreferal.php">
		<h1>REFERRAL</h1>
		<div class="input_fields_wrap">
			<div class="form-group">
				<label for="ref_first_name">First Name</label>
				<input type="text" name="ref_first_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="ref_last_name">Last Name</label>
				<input type="text" name="ref_last_name" class="form-control">
			</div>
			<div class="form-group">
				<label for="ref_email">E-Mail</label>
				<input type="email" name="ref_email" class="form-control">
			</div>
			<div class="form-group">
    			<label for="basicPhoneNumber">Phone Number</label>
    			<input type="text" class="input-medium bfh-phone form-control" data-format="+234 (000) 000-0000" name="phone_number" id="ebasicPhoneNumber" placeholder="000-0000-0000">
  			</div>
			<div class="form-group">
				<label for="ref_organization">Organazition</label>
				<input type="text" name="ref_organization" class="form-control">
			</div>
			<div class="form-group">
				<label for="ref_job_description">Job Description</label>
				<input type="text" name="ref_job_description" class="form-control">
			</div>
			<div class="form-group">
			 	<label for="ref_testimony">TESTIMONY</label>
			 	<textarea class="form-control" rows="5" name="ref_testimony"></textarea>
			</div>
		</div>
		<button type="button" class="add_field_button btn btn-default btn-xs"><strong> + Add Reference</strong></button>
		<br />
		<br />
		<div class="progress">
    		<div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      				60%
    		</div>
    	</div>
		<!-- <button type="submit" name="btn-save" class=" btn btn-success btn-block">SAVE</button> -->
 		<a type="button" href="hobbies.php" class="btn btn-primary btn-block">NEXT</a>

	</form>




</div>
<?php include_once('footer.php'); ?>
