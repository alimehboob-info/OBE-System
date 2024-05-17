<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subject-CLO-PLO Mapping</title>
    <!-- Include Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="card shadow">
            <div class="card-body shadow">
                <h3 class="bg-primary text-light text-center">Subject-CLO-PLO Mapping</h3>

                <!-- Subject select -->
                <div class="form-group">
                    <label for="subjectSelect">Select Subject:</label>
                    <select id="subjectSelect" class="form-select">
                        <option value="">Select Subject</option>
                    </select>
                </div>

                <!-- CLO select -->
                <div class="form-group">
                    <label for="cloSelect">Select CLO:</label>
                    <select id="cloSelect" class="form-select">
                        <option value="">Select CLO</option>
                    </select>
                </div>

                <!-- Mapped PLO table -->
                <h2>Mapped PLOs:</h2>
                <table class="table table-bordered" id="mappedPLOTable">
                    <thead class="bg-primary text-light text-center">
                        <tr>
                            <th>Subject Name</th>
                            <th>CLO Number</th>
                            <th>Mapped PLO</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Mapped PLO rows will be inserted here -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>


    </div>

    <!-- Include Bootstrap 5 JS and jQuery (for AJAX requests) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

    <!-- JavaScript code to fetch data and populate selects -->
    <script>
        $(document).ready(function () {
            // Fetch subjects and populate the subject select
            $.ajax({
                url: 'fetch_subjects.php',
                method: 'GET',
                dataType: 'json',
                success: function (data) {
                    var subjectSelect = $('#subjectSelect');
                    subjectSelect.empty().append('<option value="">Select Subject</option>');
                    $.each(data, function (key, value) {
                        subjectSelect.append('<option value="' + value.SubjectID + '">' + value.SubjectName + '</option>');
                    });
                },
                error: function (xhr, textStatus, errorThrown) {
                    console.error("Error fetching subjects: " + textStatus, errorThrown);
                }
            });

            // Handle subject selection
            $('#subjectSelect').change(function () {
                var subjectID = $(this).val();

                // Fetch CLOs for the selected subject and populate the CLO select
                $.ajax({
                    url: 'fetch_clos.php',
                    method: 'GET',
                    data: { subjectID: subjectID },
                    dataType: 'json',
                    success: function (data) {
                        var cloSelect = $('#cloSelect');
                        cloSelect.empty().append('<option value="">Select CLO</option>');
                        $.each(data, function (key, value) {
                            cloSelect.append('<option value="' + value.CLONumber + '">' + value.CLONumber + '</option>');
                        });
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.error("Error fetching CLOs: " + textStatus, errorThrown);
                    }
                });
            });

            // Handle CLO selection and display mapped PLOs
            $('#cloSelect').change(function () {
                var subjectID = $('#subjectSelect').val();
                var cloNumber = $(this).val();

                // Fetch and display mapped PLOs in the table
                $.ajax({
                    url: 'fetch_mapped_plos.php',
                    method: 'GET',
                    data: {
                        subjectID: subjectID,
                        cloNumber: cloNumber
                    },
                    dataType: 'json',
                    success: function (data) {
                        var mappedPLOTable = $('#mappedPLOTable tbody');
                        mappedPLOTable.empty();
                        $.each(data, function (key, value) {
                            mappedPLOTable.append('<tr class="text-center"><td>' + value.SubjectName + '</td><td>' + value.CLONumber + '</td><td>' + value.PLOHeading + '</td></tr>');
                        });
                    },
                    error: function (xhr, textStatus, errorThrown) {
                        console.error("Error fetching mapped PLOs: " + textStatus, errorThrown);
                    }
                });
            });
        });
    </script>
</body>

</html>