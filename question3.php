<?php
function classify_name_group($name) {
    $first_letter = strtolower($name[0]);

    if (in_array($first_letter, ['a', 'b', 'c', 'd'])) {
        return 'In a first group';
    } elseif (in_array($first_letter, ['e', 'f', 'g', 'h', 'i'])) {
        return 'In a second group';
    } else {
        return 'In a last group';
    }
}

// Examples for the student names
$names = ['dandi', 'irithel', 'topan', 'sandi'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Question 3</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Question 3</h1>
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="profile.php">Profile</a></li>
                <li><a href="portfolio.php">Portfolio</a></li>
                <li><a href="question2.php">Question 2</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <!-- Display name group for each student name -->
        <h2>Name Groups</h2>
        <ul>
            <?php foreach ($names as $name) { ?>
                <li><?php echo "$name, output: " . classify_name_group($name); ?></li>
            <?php } ?>
        </ul>
    </section>

    <footer>
        <p>&copy; <?php echo date("Y"); ?> My Portfolio. All rights reserved.</p>
    </footer>
</body>
</html>
