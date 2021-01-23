<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['inName'])) {
        $name = filter_var($_POST['inName'], FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['inEmail'])) {
        $email = filter_var($_POST['inEmail'], FILTER_SANITIZE_EMAIL);
    }
    if (isset($_POST['inMajor'])) {
        $major = filter_var($_POST['inMajor'], FILTER_SANITIZE_STRING);
    }
    if (isset($_POST['inContinent'])) {
        $visited = filter_var($_POST['inContinent'], FILTER_SANITIZE_STRING);
    }
} else {
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../../css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <header>
        <div class="jumbotron">
            <h1>Student Registration</h1>
        </div>
    </header>
    <nav>
        <ul>
            <li><a id="toggleMenu">&equiv;</a></li>
            <li><a href="teamform.html" class="active">Profile</a></li>
            <li><a href="submit.php">Submission</a></li>
        </ul>
    </nav>

    <section>
        <?php
        if (isset($name)) {
            echo "<h1>Profile Submitted</h1>";
            if (isset($name)) {
                echo "<p>Name: $name</p>";
            } else {
                echo "<p>Name: Not Set</p>";
            }

            if (isset($email)) {
                echo "<p>Email: <a href='mailto:$email'>$email</a></p>";
            } else {
                echo "<p>Email: Not Set</p>";
            }

            if (isset($major)) {
                echo "<p>Major:$major</p>";
            } else {
                echo "<p>Major: Not Set</p>";
            }

            if (isset($visited)) {
                echo "<p>Visited:$visited</p>";
            } else {
                echo "<p>Visited: Not Set</p>";
            }
        } else {
            echo "<h1>Profile Not Submitted</h1>";
        }
        ?>
    </section>
</body>

</html>