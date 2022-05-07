<!DOCTYPE html>
<html>
<!-- THIS FORM IS FOR APPOINTMENT DATA ENTRY -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
    <title>
        HOSPITAL
    </title>
</head>
<body style="background-color:powderblue">
    <h1 class='text-center'>
        APPOINTMENT DATA
    </h1>
    <div>
    </div>
    <div class='container center'>
         <form method="POST" action="./actions/appointment_form_insert.php">
             <div class="form-group col">
                <label for="text" id="label">APPOINTMENT ID:</label>
                <input type="text" class="form-control" name="appointment_id">

                <label for="text" id="label">APPOINTMENT STATUS:</label>
                <input type="text" class="form-control" name="appointment_status">

                <label for="text" id="label">APPOINTMENT TIME:</label>
                <input type="text" class="form-control" name="appointment_time">

                <label for="text" id="label">DOCTOR'S CHARGE:</label>
                <input type="text" class="form-control" name="doctor_charge">
                <br>
                <button type="submit" class="btn btn-primary"><strong>Submit</strong></button>
            </div>
        </form>
        <div>
            <button class="btn btn-primary" id="label" onclick="location.href='index.php'">HOME</button>
        </div>
    </div>
</body>
</html>