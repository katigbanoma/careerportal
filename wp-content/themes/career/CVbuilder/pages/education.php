<?php include_once('header.php'); ?>
<div class="container">
<script type="text/javascript" src="../js/add_field_edu.js"></script>
	<form method="post" action="../Servers/dbinputeducation.php">
		<div class="input_fields_wrap">

		    <div class="form-group">
		        <label for="input-sm">Institution</label>
		        <input type="text" class="form-control input-sm" name="institution[]" placeholder="Enter School Name">
		    </div>
		    <div class="form-group">
		        <label for="input-sm">Qualification</label>
		    	  <input type="text" name="qualification[]" class="form-control input-sm" placeholder="e.g. Bsc Computer Science">
		    </div>
		    <div class="form-group">
		        <label for="input-sm">Graduation Date</label>
		    		<input type="date" name="graduation_date[]" class="form-control input-sm" placeholder="e.g. 2016-05-20">
		    </div>

		</div>


		<button type="button" class="add_field_button btn btn-default btn-xs"><strong> + A§dd School</strong></button>
		<br/>
		<br/>
		<div class="progress">
    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:20%">
      20% Complete!
    </div>
  </div>
		<!-- <button type="submit" name="btn-save" class=" btn btn-success btn-block">SAVE</button> -->
		<a type="button" href="experience.php" class="btn btn-primary btn-block">NEXT</a>

	</form>
</div>
<?php include_once('footer.php'); ?>
