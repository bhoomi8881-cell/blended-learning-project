<?php
session_start();
include("../db.php");

if(!isset($_SESSION['faculty']))
{
    header("Location: faculty_login.php");
    exit();
}

$sql = "SELECT submissions.*, assignments.title
        FROM submissions
        JOIN assignments
        ON submissions.assignment_id = assignments.id
        ORDER BY submissions.submitted_on DESC";

$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>

<title>Student Assignment Submissions</title>

<style>

body{
margin:0;
font-family:Arial;
background:#eef2f7;
}

.header{
background:#0d47a1;
color:white;
padding:20px;
text-align:center;
font-size:28px;
}

.container{
width:95%;
margin:30px auto;
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.2);
}

table{
width:100%;
border-collapse:collapse;
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

a.download{
background:green;
color:white;
padding:8px 15px;
text-decoration:none;
border-radius:5px;
}

.back{
display:inline-block;
margin-top:20px;
padding:10px 20px;
background:#0d47a1;
color:white;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<div class="header">

📄 Student Assignment Submissions

</div>

<div class="container">

<table>

<tr>

<th>Student ID</th>

<th>Assignment</th>

<th>File</th>

<th>Submitted On</th>

<th>Download</th>

</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['student_id']; ?></td>

<td><?php echo $row['title']; ?></td>

<td><?php echo $row['file_name']; ?></td>

<td><?php echo $row['submitted_on']; ?></td>

<td>

<a class="download"
href="../uploads/assignments/<?php echo $row['file_name']; ?>"
target="_blank">

Download

</a>

</td>

</tr>

<?php } ?>

</table>

<br>

<a class="back" href="faculty_dashboard.php">

← Back to Dashboard

</a>

</div>

</body>
</html>