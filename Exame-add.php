<?php
include('header.php');




?>

<h2>Add Exame</h2>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>
						
<div class="row">
	<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h4>Exame Information</h4>
			</div>
			<div class="panel-body form-group form-group-sm">

				<form method="post" id="add_product">

					<input type="hidden" name="action" value="add_product">

					<div class="row">
						<div class="col-lg-2">subject name</div>
							
		<select name="action" id="add_product" class="form-control">
								
								<option value="add_product" selected>Oop</option>

								<option value="quote">Database</option>
								<option value="receipt">Dip</option>
								<option value="receipt">Dld</option>
								<option value="receipt">Ai</option>
								<option value="receipt">Hrm</option>
						</div>
					
					</select>
						
						</div>
						<div class="row">
						<div class="col-xs-4">Department</div>
							
		<select name="action" id="add_product" class="form-control required">
								
								
								<option value="quote">English</option>
								<option value="receipt">IT</option>
								<option value="receipt">BBA</option>
						</div>
					</select>


						</div>
						<div class="row">
						<div class="col-xs-4">Program</div>
							
		<select name="action" id="add_product" class="form-control required">
								<option value="add_product" selected>CS</option>
								
								
								<option value="receipt">it</option>
								<option value="receipt">Adpit</option>
								<option value="receipt">Adpcs</option>
						</div>
					</select>

						</div>
						<div class="row">
						<div class="col-xs-4">Teacher</div>
							
		<select name="action" id="add_product" class="form-control required">
								<option value="add_product" selected>Dr.Azam</option>
								
								<option value="quote">Dr.Hamid</option>
								<option value="receipt">Dr Ansar</option>
								<option value="receipt">BBA</option>
						</div>
					</select>

						</div>
						<div class="row">
						<div class="col-xs-4">Semester</div>
							
		<select name="action" id="add_product" class="form-control required">
								
								
								<option value="quote">1st</option>
								<option value="receipt">2nd</option>
								<option value="receipt">3rd</option>
						</div>
					</select>

						</div>
						<div class="row">
						<div class="col-xs-4">Section</div>
							
		<select name="action" id="add_product" class="form-control required">
								<option value="add_product" selected>section</option>
								
								<option value="quote">A</option>
								<option value="receipt">B</option>
								<option value="receipt">C</option>
						</div>
					</select>
					</div>
						<div class="row">
						<div class="col-xs-4">Exame_type</div>
							
		<select name="action" id="add_product" class="form-control required">
								<option value="add_product" selected>Exame_type</option>
								
								<option value="quote">mid</option>
								<option value="receipt">final</option>
								
						</div>
							</div>

						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_product" class="btn btn-success float-right" value="Add info" data-loading-text="Adding...">
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