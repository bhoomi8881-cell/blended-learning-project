<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];
echo $_SESSION['student_id'];
$sql = "SELECT * FROM attendance WHERE student_id='$student_id' ORDER BY attendance_date DESC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Attendance</title>

<style>

body{
    margin:0;
    font-family:Arial;
    background:#eef2f7;
}

.header{
    background:#0d47a1;
    color:white;
    text-align:center;
    padding:20px;
    font-size:28px;
}

.container{
    width:85%;
    margin:30px auto;
    background:white;
    padding:25px;
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

.present{
    color:green;
    font-weight:bold;
}

.absent{
    color:red;
    font-weight:bold;
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

📅 Attendance Record

</div>

<div class="container">

<table>

<tr>
<th>Date</th>
<th>Status</th>
</tr>

<?php
while($row=mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo date("d-m-Y",strtotime($row['attendance_date'])); ?></td>

<td>

<?php
if($row['status']=="Present")
{
echo "<span class='present'>✅ Present</span>";
}
else
{
echo "<span class='absent'>❌ Absent</span>";
}
?>

</td>

</tr>

<?php
}
?>

</table>

<br>

<a class="back" href="dashboard.php">

← Back to Dashboard

</a>

</div>

</body>
</html>