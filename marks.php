<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];

$result = mysqli_query($conn,"SELECT * FROM marks WHERE student_id='$student_id'");
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Marks</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
margin:0;
}

.header{
background:#0d47a1;
color:white;
padding:20px;
text-align:center;
font-size:28px;
}

.container{
width:90%;
margin:30px auto;
background:white;
padding:20px;
border-radius:10px;
box-shadow:0 0 10px gray;
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

.back{
display:inline-block;
margin-top:20px;
background:#0d47a1;
color:white;
padding:10px 20px;
text-decoration:none;
border-radius:5px;
}

</style>

</head>

<body>

<div class="header">
📊 Student Marks
</div>

<div class="container">

<table>

<tr>
<th>Subject</th>
<th>Marks</th>
<th>Total</th>
<th>Percentage</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
$percentage=($row['marks']/$row['total'])*100;
?>

<tr>

<td><?php echo $row['subject']; ?></td>

<td><?php echo $row['marks']; ?></td>

<td><?php echo $row['total']; ?></td>

<td><?php echo number_format($percentage,2); ?>%</td>

</tr>

<?php } ?>

</table>

<br>

<a class="back" href="dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>