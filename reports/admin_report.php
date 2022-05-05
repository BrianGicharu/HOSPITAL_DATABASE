<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="../style.css">
        <title>ADMIN REPORT</title>
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
            ADMIN REPORT
        </div>
        <div>
            <table>
                <tr>
                    <th>ADMIN_ID</th>
                    <th>ADMIN_EMAIL</th>
                    <th>ADMIN_PASSWORD</th>
                </tr>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "mama_lucy_hospital");
                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }
                    $sql = "SELECT `ADMIN_ID`, `ADMIN_EMAIL`,
                            `ADMIN_PASSWORD` FROM `admin` WHERE 1";

                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td>"
                                .$row["ADMIN_ID"]."</td><td>"
                                .$row["ADMIN_EMAIL"]."</td><td>"
                                .$row["ADMIN_PASSWORD"]."</td><td>"
                            ."</tr>";
                        }
                        echo "</table>";
                    } else { echo "<script>alert(\"0 records found for admin table\")</script>"; }
                    $conn->close();
                ?>
            </table>
        </div>
    </body>
</html>