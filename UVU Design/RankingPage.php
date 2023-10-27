<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>UVU Clinical Passport Ranking</title>
</head>
<body>
<header>
    <img class="logo" src="UVU_logo.png" alt="Logo">
    <h1>UVU Clinical Passport Ranking</h1>
</header>
<div class="input-section">
    <div class="input-container">
        <label for="rankIdInput">Rank ID:</label>
        <input type="text" id="rankIdInput" name="rankId">
    </div>

    <div class="input-container">
        <label for="studentIdInput">Student ID:</label>
        <input type="text" id="studentIdInput" name="studentId">
    </div>
</div>
<div>
    <h2>Ranking</h2>
    <div>
        <?php
        $rating = 0; // Default rating value
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["rating"])) {
                $rating = intval($_POST["rating"]);
            }
        }
        for ($i = 1; $i <= 5; $i++) {
            $starClass = ($i <= $rating) ? "filled" : "";
            echo '<span class="star ' . $starClass . '" onclick="submitRating(' . $i . ')">&#9734;</span>';
        }
        ?>
        <form id="ratingForm" method="POST" style="display: none;">
            <input type="hidden" name="rating" id="ratingInput">
        </form>
    </div>
    <button type="submit" form="ratingForm">Submit</button>
</div>

<footer>
    <nav>
        <ul>
            <li><a href="index.html">Home</a></li>
            <li><a href="RankingPage.php">Ranking</a></li>
            <li><a href="tracking.html">Tracking</a></li>
            <li><a href="Message.html">Messages</a></li>
        </ul>
    </nav>
</footer>
<script>
        function submitRating(rating) {
            document.getElementById("ratingInput").value = rating;
            document.getElementById("ratingForm").submit();
        }
    </script>
</body>
</html>