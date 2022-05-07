<!DOCTYPE html>
<html>
<!-- INTERACTION ENTRY POINT. START PAGE -->
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
        <link rel="stylesheet" href="./style.css">
        <title>START PAGE</title>
    </head>
    <body style="background-color:powderblue">
        <h1 class="text-center">START PAGE</h1>

        <div class="container center_buttons center">
            <div id="label" class="label container">
                FORMS
            </div>
            <div class="btn-matrix alignJustified">
                <button type="button" class="btn-info" onclick="location.href='admin_form.php'">ADMIN FORM</button>
                <button type="button" class="btn-info" onclick="location.href='appointment_form.php'">APPOINTMENT FORM</button>
            </div>
            <br>
            <div class="btn-matrix alignJustified">
                <button type="button" class="btn-info" onclick="location.href='department_form.php'">DEPARTMENT FORM</button>
                <button type="button" class="btn-info" onclick="location.href='doctor_form.php'">DOCTOR FORM</button>
                <button type="button" class="btn-info" onclick="location.href='nurse_form.php'">NURSE FORM</button>
            </div>
            <br>
            <div class="btn-matrix alignJustified">
                <button type="button" class="btn-info" onclick="location.href='patient_form.php'">PATIENT FORM</button>
                <button type="button" class="btn-info" onclick="location.href='specialty_form.php'">SPECIALTY FORM</button>
                <button type="button" class="btn-info" onclick="location.href='ward_form.php'">WARD FORM</button>
            </div>
        </div>
        <!--Second container starts here-->
        <div class="container center_bottom center2">
            <div id="label" class="label container">
                REPORTS
            </div>
            <div class="btn-matrix alignJustified">
                <button type="button" class="btn-info" onclick="location.href='./reports/admin_report.php'">ADMIN REPORT</button>
                <button type="button" class="btn-info" onclick="location.href='./reports/appointment_report.php'">APPOINTMENT REPORT</button>
            </div>
            <br>
            <div class="btn-matrix alignJustified">
                <button type="button" class="btn-info" onclick="location.href='./reports/department_report.php'">DEPARTMENT REPORT</button>
                <button type="button" class="btn-info" onclick="location.href='./reports/doctor_report.php'">DOCTOR REPORT</button>
                <button type="button" class="btn-info" onclick="location.href='./reports/nurse_report.php'">NURSE REPORT</button>
            </div>
            <br>
            <div class="btn-matrix alignJustified">
                <button type="button" class="btn-info" onclick="location.href='./reports/patient_report.php'">PATIENT REPORT</button>
                <button type="button" class="btn-info" onclick="location.href='./reports/specialty_report.php'">SPECIALTY REPORT</button>
                <button type="button" class="btn-info" onclick="location.href='./reports/ward_report.php'">WARD REPORT</button>
            </div>
        </div>
    </body>
</html>