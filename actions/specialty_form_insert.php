<?php
    $endpoint = "localhost";
    $uname = "root";
    $passwd = "";
    $dbName = "MAMA_LUCY_HOSPITAL";

    $conn = new mysqli($endpoint, $uname, $passwd,$dbName);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }else{

        $q = "INSERT INTO SPECIALTY(`SPECIALTY_ID`, `SPECIALTY_NAME`, `SPECIALTY_CODE`)
                            VALUES (?, ?, ?);";

        $statement = $conn->prepare($q);

        $statement->bind_param("iss",
                                $_POST['specialty_id'], $_POST['specialty_name'],
                                $_POST['specialty_code']
                            );

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