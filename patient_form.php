<!DOCTYPE html>
<!-- THIS FORM IS FOR PATIENT DATA ENTRY -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

<link rel="stylesheet" href="./style.css">
    <title>
        HOSPITAL
    </title>
</head>
<body style="background-color:powderblue">
    <div class='container center'>
        <div class="card">
            <div class="text-center card-header float-end" style="font-size:18;font-weight:bold;text-decoration-color: chartreuse;">
                PATIENT DATA
                <!-- <div class="btn">
                    <button id="label" class="btn btn-primary">BACK</button>
                </div> -->
            </div>
        </div>
         <form method="POST" action="./actions/patient_form_insert.php">
             <div class="form-group col">
                <label id="label">PATIENT ID:</label>
                <input type="text" class="form-control" name="patient_id">

                <label id="label">EMAIL:</label>
                <input type="email" class="form-control" name="patient_email">

                <label id="label">FIRST NAME:</label>
                <input type="text" class="form-control" name="patient_fname">

                <label id="label">LAST NAME:</label>
                <input type="text" class="form-control" name="patient_lname">

                <label id="label">YEAR OF BIRTH:</label>
                <input type="text" class="form-control" name="patient_yob">

                <label id="label">GENDER:</label>
                <input type="text" class="form-control" name="patient_gender">

                <label id="label">PASSWORD:</label>
                <input type="password" class="form-control" name="patient_password">

                <label id="label">CITY:</label>
                <input type="text" class="form-control" name="patient_city">

                <label id="label">STATE:</label>
                <input type="text" class="form-control" name="patient_state">

                <label id="label">ZIP CODE:</label>
                <input type="text" class="form-control" name="patient_zip_code">
                <br>
                <button type="submit" name="submit" value="Submit" id="label" class="btn btn-primary">Submit</button>
            </div>
        </form>
        <div>
            <button class="btn btn-primary" id="label" onclick="location.href='index.php'">HOME</button>
        </div>
    </div>
</body>
</html>