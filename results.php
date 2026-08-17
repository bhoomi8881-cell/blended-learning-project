<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$student_id = $_SESSION['student_id'];

$sql = "SELECT * FROM results WHERE student_id='$student_id' ORDER BY quiz_date DESC";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz Results</title>

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
width:80%;
margin:40px auto;
background:white;
padding:30px;
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
📊 Quiz Results
</div>

<div class="container">

<table>

<tr>
<th>ID</th>
<th>Score</th>
<th>Total</th>
<th>Date</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['score']; ?></td>

<td><?php echo $row['total']; ?></td>

<td><?php echo $row['quiz_date']; ?></td>

</tr>

<?php } ?>

</table>

<br>

<a class="back" href="dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>