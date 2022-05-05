<!DOCTYPE html>
<!-- THIS FORM IS FOR PATIENT DATA ENTRY -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
    <title>
        HOSPITAL
    </title>
</head>
<body style="background-color:powderblue">
    <h1 class='text-center'>
        DEPARTMENT DATA
    </h1>
    <div>
    </div>
    <div class='container center'>
         <form action="./actions/department_form_insert.php">
             <div class="form-group col">
                <label id="label">DEPT ID:</label>
                <input type="text" class="form-control" name="dept_id">

                <label id="label">DEPT NAME:</label>
                <input type="text" class="form-control" name="dept_name">

                <label id="label">DEPT TEL:</label>
                <input type="text" class="form-control" name="dept_tel">

                <label id="label">DEPT EMAIL:</label>
                <input type="email" class="form-control" name="dept_email">

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