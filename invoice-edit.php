<?php


include('header.php');
include('functions.php');

$getID = $_GET['id'];

// Connect to the database
$mysqli = new mysqli("DATABASE_HOST, DATABASE_USER, DATABASE_PASS, DATABASE_NAME Database_student_info");

// output any connection error
if ($mysqli->connect_error) {
	die('Error : (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// the query
$query = "SELECT p.*, i.*, c.*
			FROM invoice_items p 
			JOIN invoices i ON i.invoice = p.invoice
			JOIN customers c ON c.invoice = i.invoice
			WHERE p.invoice = '" . $mysqli->real_escape_string($getID) . "'";

$result = mysqli_query($mysqli, $query);

// mysqli select query
if ($result) {
	while ($row = mysqli_fetch_assoc($result)) {
		//teacheraddclo

		$student_name = $row['student_name']; // invoice number
		$Email = $row['Email']; // invoice custom email body
		$semester = $row['semester']; // invoice date
		$Father_name = $row['Father_name']; // invoice due date
		$cell_no = $row['cell_no']; // invoice sub-total
		$student_cnic = $row['shipping']; // invoice shipping amount
		$Gender = $row['gender']; // invoice discount
		$Department = $row['Department'];

		$customer_name = $row['name']; // customer name
		$customer_email = $row['email']; // customer email
		$customer_address_1 = $row['address_1']; // customer address
		$customer_address_2 = $row['address_2']; // customer address
		$customer_town = $row['town']; // customer town
		$customer_county = $row['county']; // customer county
		$customer_postcode = $row['postcode']; // customer postcode
		$customer_phone = $row['phone']; // customer phone number

		//shipping
		$customer_name_ship = $row['name_ship']; // customer name (shipping)
		$customer_address_1_ship = $row['address_1_ship']; // customer address (shipping)
		$customer_address_2_ship = $row['address_2_ship']; // customer address (shipping)
		$customer_town_ship = $row['town_ship']; // customer town (shipping)
		$customer_county_ship = $row['county_ship']; // customer county (shipping)
		$customer_postcode_ship = $row['postcode_ship']; // customer postcode (shipping)

		// invoice details
		$invoice_number = $row['invoice']; // invoice number
		$custom_email = $row['custom_email']; // invoice custom email body
		$invoice_date = $row['invoice_date']; // invoice date
		$invoice_due_date = $row['invoice_due_date']; // invoice due date
		$invoice_subtotal = $row['subtotal']; // invoice sub-total
		$invoice_shipping = $row['shipping']; // invoice shipping amount
		$invoice_discount = $row['discount']; // invoice discount
		$invoice_vat = $row['vat']; // invoice vat
		$invoice_total = $row['total']; // invoice total
		$invoice_notes = $row['notes']; // Invoice notes
		$invoice_type = $row['invoice_type']; // Invoice type
		$invoice_status = $row['status']; // Invoice status

		//teacheraddclo

		$student_name = $row['student_name']; // invoice number
		$Email = $row['Email']; // invoice custom email body
		$semester = $row['semester']; // invoice date
		$Father_name = $row['Father_name']; // invoice due date
		$cell_no = $row['cell_no']; // invoice sub-total
		$student_cnic = $row['shipping']; // invoice shipping amount
		$Gender = $row['gender']; // invoice discount
		$Department = $row['Department'];




	}
}

/* close connection */
$mysqli->close();

?>

<h1>Edit Invoice (
	<?php echo $getID; ?>)
</h1>
<hr>

<div id="response" class="alert alert-success" style="display:none;">
	<a href="#" class="close" data-dismiss="alert">&times;</a>
	<div class="message"></div>
</div>

<form method="post" id="update_invoice">
	<input type="hidden" name="action" value="update_invoice">
	<input type="hidden" name="update_id" value="<?php echo $getID; ?>">

	<div class="row">
		<div class="col-xs-12">

		</div>
	</div>

	<div class="row">
		<div class="col-xs-5">
			<h1>
				<img
					src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJ_j4iBpfhPBPTlJoa2RGG_S8HZyPjKx7kbSS3l9WTCo1AAtOboB56UgFD8G5RHmS-bg4&usqp=CAU">
			</h1>
		</div>
		<div class="col-xs-7 text-right">
			<div class="row">
				<div class="col-xs-6">
					<h1>DEPARTMENT</h1>
				</div>
				<div class="col-xs-">
					<select name="invoice_type" id="invoice_type" class="form-control">
						<option value="invoice" <?php if ($invoice_type === 'invoice') { ?>selected<?php } ?>>DEPARTMENT
						</option>
						<option value="quote" <?php if ($invoice_type === 'quote') { ?>selected<?php } ?>>Quote</option>
						<option value="receipt" <?php if ($invoice_type === 'receipt') { ?>selected<?php } ?>>Receipt
						</option>
					</select>
				</div>
				<div class="col-xs-">
					<select name="invoice_status" id="invoice_status" class="form-control">
						<option value="open" <?php if ($invoice_status === 'open') { ?>selected<?php } ?>>ADPIT</option>
						<option value="paid" <?php if ($invoice_status === 'paid') { ?>selected<?php } ?>>BSCS</option>
						<option value="paid" <?php if ($invoice_status === 'paid') { ?>selected<?php } ?>>BSit</option>
						<option value="paid" <?php if ($invoice_status === 'paid') { ?>selected<?php } ?>>ADPCS</option>
					</select>
				</div>

				<?php popProductsList(); ?>
			</div>
			<div class="modal-footer">
				<button type="button" data-dismiss="modal" class="btn btn-primary" id="selected">Add</button>
				<button type="button" data-dismiss="modal" class="btn">Cancel</button>
			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

	<?php
	include('footer.php');
	?>