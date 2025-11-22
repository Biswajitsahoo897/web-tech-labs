<!DOCTYPE html>
<html>
<head>
    <title>Student Marks</title>
</head>
<body>

<h2>Student Marks Form</h2>

<form method="post">
    Name: <input type="text" name="name"><br><br>
    Subject 1 Marks: <input type="text" name="m1"><br><br>
    Subject 2 Marks: <input type="text" name="m2"><br><br>
    Subject 3 Marks: <input type="text" name="m3"><br><br>
    <input type="submit" value="Submit">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){

    $name = $_POST['name'];
    $m1 = $_POST['m1'];
    $m2 = $_POST['m2'];
    $m3 = $_POST['m3'];

    // Calculate total and average
    $total = $m1 + $m2 + $m3;
    $avg = $total / 3;

    // Find grade
    if($avg >= 90)
        $grade = "A";
    elseif($avg >= 75)
        $grade = "B";
    elseif($avg >= 60)
        $grade = "C";
    elseif($avg >= 40)
        $grade = "D";
    else
        $grade = "F";

    // Display result
    echo "<h3>Result</h3>";
    echo "Name: $name<br>";
    echo "Total: $total<br>";
    echo "Average: $avg<br>";
    echo "Grade: $grade<br>";
}
?>

</body>
</html>