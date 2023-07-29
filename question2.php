<?php
function get_grade_description($score) {
    if ($score >= 80 && $score <= 100) {
        return 'A';
    } elseif ($score >= 65 && $score <= 79) {
        return 'B';
    } elseif ($score >= 50 && $score <= 64) {
        return 'C';
    } elseif ($score >= 35 && $score <= 49) {
        return 'D';
    } elseif ($score >= 1 && $score <= 34) {
        return 'E';
    } else {
        return 'Invalid Score';
    }
}

// Example for student exams
$student = 'Rocky';
$score = 90;
$grade = get_grade_description($score);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Question 2</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Question 2</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="question3.php">Question 3</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <!-- Display grade description for the given student score -->
        <h2>Grade for <?php echo $student; ?></h2>
        <p>Nilai <?php echo $student; ?> mendapatkan nilai <?php echo $grade; ?></p>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>
