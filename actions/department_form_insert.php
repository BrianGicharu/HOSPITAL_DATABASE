<?php
    $endpoint = "localhost";
    $uname = "root";
    $passwd = "";
    $dbName = "MAMA_LUCY_HOSPITAL";

    $conn = new mysqli($endpoint, $uname, $passwd,$dbName);

    if($conn->connect_error){
        die("Connection failed: ".$conn->connect_error);
    }else{

        $q = "INSERT INTO DEPARTMENT(`DEPT_ID`, `DEPT_NAME`, `DEPT_TEL`, `DEPT_EMAIL`)
                VALUES (?, ?, ?, ?)";

        $statement = $conn->prepare($q);

        $statement->bind_param("isss",
                                $_POST['dept_id'], $_POST['dept_name'],
                                $_POST['dept_tel'], $_POST['dept_email']
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