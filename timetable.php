<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$result = mysqli_query($conn,"SELECT * FROM timetable ORDER BY id");
?>

<!DOCTYPE html>
<html>
<head>
<title>Class Timetable</title>

<style>
body{
    font-family:Arial;
    background:#eef2f7;
    margin:0;
}

.header{
    background:#0d47a1;
    color:white;
    text-align:center;
    padding:20px;
    font-size:28px;
}

.container{
    width:90%;
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

.back{
    display:inline-block;
    margin-top:20px;
    background:#0d47a1;
    color:white;
    text-decoration:none;
    padding:10px 20px;
    border-radius:5px;
}
</style>
</head>

<body>

<div class="header">
📅 Weekly Timetable
</div>

<div class="container">

<table>

<tr>
<th>Day</th>
<th>Time</th>
<th>Subject</th>
<th>Faculty</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['day']; ?></td>
<td><?php echo $row['time_slot']; ?></td>
<td><?php echo $row['subject']; ?></td>
<td><?php echo $row['faculty']; ?></td>

</tr>

<?php } ?>

</table>

<br>

<a class="back" href="dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>