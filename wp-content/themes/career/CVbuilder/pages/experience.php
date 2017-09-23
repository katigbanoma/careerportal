<?php include_once('header.php'); ?>
<div class="container">
<script type="text/javascript" src="/js/add_field_exp.js"></script>
	<form method="post" action="../Servers/dbinputexperience.php">
		<div class="input_fields_wrap">

		    <div class="form-group">
		        <label for="input-sm">Organization</label>
		        <input type="text" class="form-control input-sm" name="organization[]" placeholder="Enter Company Name">
		    </div>
		    <div class="form-group">
		        <label for="input-sm">Post Held</label>
		    	  <input type="text" name="post_held[]" class="form-control input-sm" placeholder="e.g. Project Manager">
		    </div>
		    <div class="form-group">
		        <label for="input-sm">From</label>
		    		<input type="date" name="start_year[]" class="form-control input-sm" placeholder="e.g. 2016">
		    </div>
        <div class="form-group">
            <label for="input-sm">To</label>
            <input type="date" name="end_year[]" class="form-control input-sm" placeholder="e.g. 2019">
        </div>

		</div>


		<button type="button" class="add_field_button btn btn-default btn-xs"><strong> + Add Job</strong></button>
		<br/>
		<br/>
		<div class="progress">
    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:40%">
      40% Complete
    </div>
  </div>
		<!-- <button type="submit" name="btn-save" class=" btn btn-success btn-block">SAVE</button> -->
		<a type="button" href="skills.php" class="btn btn-primary btn-block">NEXT</a>

	</form>
</div>

<?php include_once('footer.php'); ?>
