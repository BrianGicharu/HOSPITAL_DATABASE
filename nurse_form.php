<!DOCTYPE html>
<!-- THIS FORM IS FOR PATIENT DATA ENTRY -->
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
    <title>
        HOSPITAL
    </title>
</head>
<body style="background-color:powderblue">
    <h1 class='text-center'>
        NURSE DATA
    </h1>
    <div>
    </div>
    <div class='container center'>
         <form action="./actions/nurse_form_insert.php">
             <div class="form-group col">

                <label id="label">NURSE ID:</label>
                <input type="text" class="form-control" name="nurse_id">

                <label id="label">FIRST NAME:</label>
                <input type="text" class="form-control" name="nurse_fname">

                <label id="label">LAST NAME:</label>
                <input type="text" class="form-control" name="nurse_lname">

                <label id="label">EMAIL:</label>
                <input type="email" class="form-control" name="nurse_email">

                <label id="label">PHONE:</label>
                <input type="text" class="form-control" name="nurse_phone">

                <label id="label">CITY:</label>
                <input type="text" class="form-control" name="nurse_city">

                <label id="label">STATE:</label>
                <input type="text" class="form-control" name="nurse_state">

                <label id="label">ZIP CODE:</label>
                <input type="text" class="form-control" name="nurse_zip_code">
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