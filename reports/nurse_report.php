<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title>NURSE REPORT</title>
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
            NURSE REPORT
        </div>
        <div>
            <table>
                <tr>
                    <th>NURSE_ID</th>
                    <th>NURSE_FNAME</th>
                    <th>NURSE_LNAME</th>
                    <th>NURSE_EMAIL</th>
                    <th>NURSE_PHONE</th>
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
                    $sql = "SELECT `NURSE_ID`, `NURSE_FNAME`, `NURSE_LNAME`,
                            `NURSE_EMAIL`, `NURSE_PHONE`, `CITY`, `STATE`,
                            `ZIPCODE` FROM `nurse` WHERE 1";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>"
                                .$row["NURSE_ID"]."</td><td>"
                                .$row["NURSE_FNAME"]."</td><td>"
                                .$row["NURSE_LNAME"]."</td><td>"
                                .$row["NURSE_EMAIL"]."</td><td>"
                                .$row["NURSE_PHONE"]."</td><td>"
                                .$row["CITY"]."</td><td>"
                                .$row["STATE"]."</td><td>"
                                .$row["ZIPCODE"]."</td><td>"
                                ."</tr>";
                        }
                        echo "</table>";
                    } else { echo "<script>alert(\"0 records found for nurse' table\")</script>"; }
                    $conn->close();
                ?>
            </table>
        </div>
    </body>
</html>