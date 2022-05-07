<!DOCTYPE html>
<!-- THIS FORM IS FOR SPECIALTY DATA ENTRY -->
<html>
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
    <h1 class='text-center'>
        SPECIALTY DATA
    </h1>
    <div>
    </div>
    <div class='container center'>
         <form method="post" action="./actions/specialty_form_insert.php">
             <div class="form-group col">
                <label id="label">SPECIALTY ID:</label>
                <input type="text" class="form-control" name="specialty_id">

                <label id="label">SPECIALTY NAME:</label>
                <input type="text" class="form-control" name="specialty_name">

                <label id="label">SPECIALTY CODE:</label>
                <input type="text" class="form-control" name="specialty_code">
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