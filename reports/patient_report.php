<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title>PATIENT TABLE</title>
        <style>
            table {
                border-collapse: collapse;
                width: 100%;
                color: #588c7e;
                font-family: monospace;
                font-size: 25px;
                text-align: left;
            }
            th {
                background-color: #588c7e;
                color: white;
            }
            tr:nth-child(even) {background-color: #f2f2f2}
        </style>
    </head>
    <body style="background-color:lightblue;">
        <div class="text-center container" style="font-size:50;font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;">
            PATIENT REPORT
        </div>
        <div>
            <table>
                <tr>
                    <th>P_ID</th>
                    <th>P_EMAIL</th>
                    <th>P_FNAME</th>
                    <th>P_LNAME</th>
                    <th>YOB</th>
                    <th>GENDER</th>
                    <th>PASSWORD</th>
                    <th>CITY</th>
                    <th>STATE</th>
                    <th>ZIPCODE</th>
                </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "mama_lucy_hospital");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: ".$conn->connect_error);
                    }
                    $sql = "SELECT `P_ID`, `P_EMAIL`, `P_FNAME`, `P_LNAME`,
                            `YOB`, `GENDER`, `PASSWORD`, `CITY`, `STATE`,
                            `ZIPCODE` FROM `patient` WHERE 1";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>"
                                .$row["P_ID"]."</td><td>"
                                .$row["P_EMAIL"]."</td><td>"
                                .$row["P_FNAME"]."</td><td>"
                                .$row["P_LNAME"]."</td><td>"
                                .$row["YOB"]."</td><td>"
                                .$row["GENDER"]."</td><td>"
                                .$row["PASSWORD"]."</td><td>"
                                .$row["CITY"]."</td><td>"
                                .$row["STATE"]."</td><td>"
                                .$row["ZIPCODE"]."</td><td>"
                                ."</tr>";
                        }
                        echo "</table>";
                    } else { echo "<script>alert(\"0 records found for patients' table\")</script>"; }
                    $conn->close();
                ?>
            </table>
        </div>
    </body>
</html>