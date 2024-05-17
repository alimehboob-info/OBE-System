<?php

include('header.php');
include('functions.php');

?>
  

        



		<h2>Add new <span class="Department_type"> Department</span> </h2>
		<!-- <hr> -->

		<div id="response" class="alert alert-success" style="display:none;">
			<a href="#" class="close" data-dismiss="alert">&times;</a>
			<div class="message"></div>
		</div>

		<form method="post" id="create_invoice">
			<input type="hidden" name="action" value="create_department">
			
			<div class="row">
				<div class="col-xs-1">
				
				</div>
				<div class="col-xs-4 text-">
					<div class="row">
						<div class="col-xs-">
							<h2 class="">Department Name:</h2>
						</div>
						<div class="col-xs-">

							<select name="invoice_type" id="invoice_type" class="form-control">
								<option type="text" name="invoice_type" required><br>
								<option value="invoice" selected>ADPIT</option>
								<option value="quote">BSCS</option>
								<option value="receipt">BSIT</option>
								<option value="receipt">ADPCS</option>
							</select>

						</div>

				</div>
				<div class="col-xs-15 text-left">
					<div class="row">
						<div class="col-xs-">
							<h2 class=""> Department ID:</h2>
						</div>
						<div class="col-xs-15">
							<select name="invoice_type" id="invoice_type" class="form-control">
								<option value="invoice" selected>12345</option>
								<option value="quote">234567</option>
								<option value="receipt">78594</option>
							</select>
						</div>
						<div class="row">
						<div class="col-xs-12 margin-top btn-group">
							<input type="submit" id="action_add_product" class="btn btn-success float-right" value="Add Department" data-loading-text="Adding...">
						</div>