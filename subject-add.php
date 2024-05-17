<?php
include('header.php');

?>

<h2>Add subject</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Program Information</h4>
			</div>
			<div class="panel-body form-group form-group-sm">
				<form method="post" id="add_product">
					<input type="hidden" name="action" value="add_product">

					<div class="row">
						<div class="col-xs-4">
							<label>Subject Name:</label>
							<input type="text" class="form-control required" name="program_name" placeholder="Enter subject">
						</div>
						<div class="col-xs-4">
							<label>Teacher</label>
							<input type="text" class="form-control required" name="teacher_name" placeholder="Enter subject Teacher">
						</div>
						<div class="col-xs-4">
							<label>Credit.hrs</label>
							<input type="text" class="form-control required" name="department_name" placeholder="Enter subject Credit.hrs"subject crdit hrs>
							</div>
							<div class="col-xs-4">
							<label>Semester</label>
							<input type="text" class="form-control required" name="department_name" placeholder="Enter subject Semester"subject crdit hrs>
							</div>


						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_product" class="btn btn-success float-right" value="Add Program" data-loading-text="Adding...">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
<div>

<?php
	include('footer.php');
?>