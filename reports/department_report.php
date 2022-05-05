<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title>DEPARTMENT REPORT</title>
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
            DEPARTMENT REPORT
        </div>
        <div>
            <table>
                <tr>
                    <th>DEPT_ID</th>
                    <th>DEPT_NAME</th>
                    <th>DEPT_TEL</th>
                    <th>DEPT_EMAIL</th>
                </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "mama_lucy_hospital");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT `DEPT_ID`, `DEPT_NAME`, `DEPT_TEL`,
                            `DEPT_EMAIL` FROM `department` WHERE 1";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>"
                                .$row["DEPT_ID"]."</td><td>"
                                .$row["DEPT_NAME"]."</td><td>"
                                .$row["DEPT_TEL"]."</td><td>"
                                .$row["DEPT_EMAIL"]."</td><td>"
                                ."</tr>";
                        }
                        echo "</table>";
                    } else { echo "<script>alert(\"0 records found for department table\")</script>"; }
                    $conn->close();
                ?>
            </table>
        </div>
    </body>
</html>