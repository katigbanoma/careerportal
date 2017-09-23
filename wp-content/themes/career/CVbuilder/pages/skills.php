<?php include('header.php'); ?>
<div class="container">
	<h1>SKILLS</h1>
	<form method="post" action="../Servers/dbinputskills.php">
		<div class="input_fields_wrap">
			<div class="form-group">
				<label for="input-sm">Skill</label>
                <input type="text" value="Amsterdam,Washington,Sydney,Beijing,Cairo" data-role="tagsinput" />
            </div>
		
		<!-- <button type="button" class="add_field_button btn btn-default btn-xs"><strong> + Add Skill</strong></button> -->
		<br />
		<br />
		<div class="progress">
    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width:60%">
      60%
    </div>
  </div>
		<!-- <button type="submit" class="btn btn-success btn-block" name="btn-save"><strong>SAVE</strong></button> -->
		<a type="button" href="referral.php" class="btn btn-primary btn-block">NEXT</a>
	</form>
</div>
<?php include('footer.php'); ?>
