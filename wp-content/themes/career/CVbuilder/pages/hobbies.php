<?php include_once('header.php'); ?>
<div class="container">
	<form method="post" action="dbinputHobbies.php">
		<div class="form-group">
			<label for="hobbies">HOBBIES</label>
			<textarea name="hobbies" rows="5" class="form-control"></textarea>
		</div>
		<div class="progress">
    <div class="progress-bar progress-bar-striped active progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width:80%">
      80%
    </div>
  </div>
		<!-- <button type="submit" class="btn btn-success btn-block" name="btn-save"><strong>SAVE</strong></button> -->
		<a href="" type="button" href="" class="btn btn-primary btn-block">NEXT</a>
	</form>
</div>
<?php include_once('footer.php'); ?>
