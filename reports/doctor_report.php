<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title>DOCTOR REPORT</title>
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
    <body style="background-color:beige;">
        <div class="text-center container" style="font-size:50;font-weight: bold;font-family: Verdana, Geneva, Tahoma, sans-serif;">
            DOCTOR REPORT
        </div>
        <div>
            <table>
                <tr>
                    <th>DR_ID</th>
                    <th>DR_FNAME</th>
                    <th>DR_LNAME</th>
                    <th>DR_EMAIL</th>
                    <th>DR_ISACTIVE</th>
                    <th>PASSWORD</th>
                    <th>STATE</th>
                    <th>CITY</th>
                    <th>ZIPCODE</th>
                </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "mama_lucy_hospital");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT `DR_ID`, `DR_FNAME`, `DR_LNAME`, `DR_EMAIL`, `DR_ISACTIVE`,
                            `PASSWORD`, `STATE`, `CITY`, `ZIPCODE` FROM `doctor` WHERE 1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>"
                                .$row["DR_ID"]."</td><td>"
                                .$row["DR_FNAME"]."</td><td>"
                                .$row["DR_LNAME"]."</td><td>"
                                .$row["DR_EMAIL"]."</td><td>"
                                .$row["DR_ISACTIVE"]."</td><td>"
                                .$row["PASSWORD"]."</td><td>"
                                .$row["STATE"]."</td><td>"
                                .$row["CITY"]."</td><td>"
                                .$row["ZIPCODE"]."</td><td>"
                                ."</tr>";
                        }
                    } else { echo "<script>alert(\"0 records found for doctor table\")</script>"; }
                    $conn->close();
                ?>
            </table>
        </div>
    </body>
</html>