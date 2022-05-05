<!DOCTYPE html>
<!-- THIS FORM IS FOR WARD DATA ENTRY -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
    <title>
        HOSPITAL
    </title>
</head>
<body style="background-color:powderblue">
    <div class='container center'>
        <div class='container'>
        <div class="card">
            <div class="text-justify float-end" style="font-size:18;font-weight:bold;text-decoration-color: chartreuse;">
                WARD DATA
                <button id="label" class="btn btn-primary">BACK</button>
            </div>
        </div>
         <form method="POST" action="./actions/ward_form_insert.php">
             <div class="form-group col">
                <label id="label">WARD ID:</label>
                <input type="text" class="form-control" name="ward_id">

                <label id="label">WARD NO:</label>
                <input type="text" class="form-control" name="ward_no">

                <label id="label">WARD TELEPHONE:</label>
                <input type="text" class="form-control" name="ward_telephone">

                <label id="label">WARD TYPE:</label>
                <input type="text" class="form-control" name="ward_type">

                <label id="label">WARD NAME:</label>
                <input type="text" class="form-control" name="ward_name">

                <button type="submit" class="btn btn-primary"><strong>Submit</strong></button>
            </div>
        </form>
        <div>
            <button class="btn btn-primary" id="label" onclick="location.href='index.php'">HOME</button>
        </div>
    </div>
</body>
</html>