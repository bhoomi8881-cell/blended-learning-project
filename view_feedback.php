<?php
session_start();
include("../db.php");

if(!isset($_SESSION['faculty']))
{
    header("Location: faculty_login.php");
    exit();
}

$result = mysqli_query($conn,"SELECT * FROM feedback ORDER BY feedback_date DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>View Feedback</title>

<style>
body{
    font-family:Arial;
    background:#eef2f7;
}

table{
    width:90%;
    margin:30px auto;
    border-collapse:collapse;
    background:white;
}

th,td{
    border:1px solid #ddd;
    padding:12px;
    text-align:center;
}

th{
    background:#0d47a1;
    color:white;
}
</style>

</head>

<body>

<h2 align="center">Student Feedback</h2>

<table>

<tr>
<th>ID</th>
<th>Student</th>
<th>Feedback</th>
<th>Date</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['student_name']; ?></td>

<td><?php echo $row['message']; ?></td>

<td><?php echo $row['feedback_date']; ?></td>

</tr>

<?php } ?>

</table>

</body>
</html>