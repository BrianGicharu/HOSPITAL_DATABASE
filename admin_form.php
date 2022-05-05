<!DOCTYPE html>
<!-- THIS FORM IS FOR ADMIN DATA ENTRY -->
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="./style.css">
    <title>
        HOSPITAL
    </title>
</head>
<body style="background-color:powderblue">
    <h1 class='text-center'>
        ADMIN DATA
    </h1>
    <div>
    </div>
    <div class='container center'>
         <form method="POST" action="./actions/admin_form_insert.php">
             <div class="form-group col">
                <label id="label">ADMIN ID:</label>
                <input type="text" class="form-control" name="admin_id">

                <label id="label">EMAIL:</label>
                <input type="email" class="form-control" name="admin_email">

                <label id="label">PASSWORD:</label>
                <input type="password" class="form-control" name="admin_password">

                <button type="submit" class="btn btn-primary"><strong>Submit</strong></button>
            </div>
        </form>
        <div>
            <button class="btn btn-primary" id="label" onclick="location.href='index.php'">HOME</button>
        </div>
    </div>
</body>
</html>