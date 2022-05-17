<?php
    $endpoint = "localhost";
    $uname = "root";
    $passwd = "";
    $dbName = "MAMA_LUCY_HOSPITAL";

    $conn = new mysqli($endpoint, $uname, $passwd,$dbName);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }else{

        $q = "INSERT INTO `patient`(`P_ID`, `P_EMAIL`, `P_FNAME`, `P_LNAME`,
                `YOB`, `GENDER`, `PASSWORD`, `CITY`, `STATE`, `ZIPCODE`)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);";

        $statement = $conn->prepare($q);

        $statement->bind_param("isssssssss",
                                $_POST['patient_id'], $_POST['patient_email'], $_POST['patient_fname'],
                                $_POST['patient_lname'], $_POST['patient_yob'], $_POST['patient_gender'],
                                password_hash($_POST['patient_password'], PASSWORD_DEFAULT), $_POST['patient_city'],
                                $_POST['patient_state'], $_POST['patient_zip_code']);

        $statement->execute();

        $statement->close();
        $conn->close();
    }
    print_r(
        "<!DOCTYPE html>
            <head>
                <title>200: INSERT SUCCESS</title>
                <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\"
                integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
                <link rel=\"stylesheet\" href=\"../style.css\">
            </head>
            <body>
                <div class=\"card-header container center\">
                    <h3>
                        Record Insert Successful.
                    </h3>
                    <button id=\"label\" type=\"submit\" class=\"btn btn-primary\" onclick=\"history.go(-1)\">
                        BACK
                    </button>
                </div>
            </body>
        </html>"
    );
?>