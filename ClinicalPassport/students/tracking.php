<?php
session_start();
require('../model/students_db.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <title>Client Tracking</title>
</head>

<body>
        <div class="grid-container">
                <div class="grid-item"></div>
                <div class="grid-item2">
                        <img src="/ClinicalPassport/images/UVU_logo.png" alt="uvu logo">
                        <h1>UVU Clinical Passport</h1>
                </div>
                <div class="grid-item"></div>
                <div class="grid-item"></div>
                <div class="grid-item5">
                        <h2>Tracking</h2>
                        <label for="trackingID">Tracking ID:</label>
                        <select name="trackingID" id="trackingID">
                                <option value="" disabled selected hidden>Select an ID</option>
                                <option value="1435768">1435768</option>
                                <option value="8476934">8476934</option>
                                <option value="7582946">7582946</option>
                                <option value="8673947">8673947</option>
                                <option value="8982021">8982021</option>
                        </select>
                        <br />
                        <br/>
                        <label for="studentID">Student ID:</label>
                        <select name="studentID" id="studentID">
                                <option value="" disabled selected hidden>Select an ID</option>
                                <option value="10001001">10001001</option>
                                <option value="10002002">10002002</option>
                                <option value="10003003">10003003</option>
                                <option value="10004004">10004004</option>
                        </select>
                        <br />
                        <br/>
                        <label for="procedureID">Procedure ID:</label>
                        <select name="procedureID" id="procedureID">
                                <option value="" disabled selected hidden>Select an ID</option>
                                <option value="colonoscopy">Colonoscopy</option>
                                <option value="biopsy">Biopsy</option>
                                <option value="appendectomy">Appendectomy</option>
                                <option value="hysteroscopy">Hysteroscopy</option>
                        </select>
                </div>
        </div>
        <br><br>
        <button type="submit" form="ratingForm">Submit</button>
        <script>
                function submitRating(rating) {
                document.getElementById("ratingInput").value = rating;
                document.getElementById("ratingForm").submit();
                }
        </script>
</body>
</html>
<br><br>
<br><br>
<br><br>
<?php include '../view/footer.php'; ?>