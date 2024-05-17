<?php
include('header.php');




?>

<h2>Add Programe</h2>
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
						<div class="col-lg-2">Programe name</div>
							
		<select name="action" id="add_product" class="form-control">
								
								<option value="add_product" selected>ADPIT</option>

								<option value="quote">BSCS</option>
								<option value="receipt">BSIT</option>
								<option value="receipt">ADPCS</option>
						</div>
					</select>
						<div class="col-xs-4">Programe Teacher</div>
							<input type="text" class="form-control required" name="teacher_name" placeholder="Enter Programe Teacher">
						</div>
						<div class="row">
						<div class="col-xs-4">Department</div>
							
		<select name="action" id="add_product" class="form-control required">
								<option value="add_product" selected>CS</option>
								
								<option value="quote">English</option>
								<option value="receipt">IT</option>
								<option value="receipt">BBA</option>
						</div>
					</select>
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