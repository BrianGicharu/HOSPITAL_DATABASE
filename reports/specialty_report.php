<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title>SPECIALTY REPORT</title>
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
            SPECIALTY REPORT
        </div>
        <div>
            <table>
                <tr>
                    <th>SPECIALTY_ID</th>
                    <th>SPECIALTY_NAME</th>
                    <th>SPECIALTY_CODE</th>
                </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "mama_lucy_hospital");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: ".$conn->connect_error);
                    }
                    $sql = "SELECT `SPECIALTY_ID`, `SPECIALTY_NAME`,
                            `SPECIALTY_CODE` FROM `specialty` WHERE 1";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>"
                                .$row["SPECIALTY_ID"]."</td><td>"
                                .$row["SPECIALTY_NAME"]."</td><td>"
                                .$row["SPECIALTY_CODE"]."</td><td>"
                                ."</tr>";
                        }
                        echo "</table>";
                    } else { echo "<script>alert(\"0 records found for specialty' table\")</script>"; }
                    $conn->close();
                ?>
            </table>
        </div>
    </body>
</html>