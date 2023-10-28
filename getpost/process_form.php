<!DOCTYPE html>
<html>
<head>
    <title>Form Submission Result</title>
    <style>
        body {
            background-color: #D5B8C6;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        h1 {
            color: #FFD3B6;
        }
        p {
            color: #7F6A93;
        }
        a {
            color: #FFD3B6;
            text-decoration: none;
        }
        a:hover {
            color: #558F91;
        }
    </style>
</head>
<body>
    <h1>Form Submission Result</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $age = $_POST["age"];
        $gender = $_POST["gender"];
        $religion = $_POST["religion"];
        $school = $_POST["school"];
        $course = $_POST["course"];
        $hobbies = $_POST["hobbies"];
        $skills = $_POST["skills"];
        $dream_job = $_POST["dream_job"];
        $motto = $_POST["motto"];
        
        echo "<p><strong>First Name:</strong> $first_name</p>";
        echo "<p><strong>Last Name:</strong> $last_name</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "<p><strong>Gender:</strong> $gender</p>";
        echo "<p><strong>Religion:</strong> $religion</p>";
        echo "<p><strong>School:</strong> $school</p>";
        echo "<p><strong>Course:</strong> $course</p>";
        echo "<p><strong>Hobbies:</strong> $hobbies</p>";
        echo "<p><strong>Skills:</strong> $skills</p>";
        echo "<p><strong>Dream Job:</strong> $dream_job</p>";
        echo "<p><strong>Motto in Life:</strong> $motto</p>";
        
        echo '<br><a href="form.html">Back to Form</a>';  // Add the "Back" button
        
        // You can process and store the POST data as needed
    } else {
        // Redirect back to the form if accessed directly
        header("Location: form.html");
        exit;
    }
    ?>
</body>
</html>
