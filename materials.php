<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM materials";
$result = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>Study Materials</title>

<style>

body{
    margin:0;
    font-family:Arial,sans-serif;
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

tr:nth-child(even){
    background:#f9f9f9;
}

.download{
    background:green;
    color:white;
    padding:8px 15px;
    text-decoration:none;
    border-radius:5px;
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
📚 Study Materials
</div>

<div class="container">

<table>

<tr>
<th>ID</th>
<th>Course</th>
<th>File</th>
<th>Download</th>
</tr>

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['course_name']; ?></td>

<td><?php echo $row['file_name']; ?></td>

<td>

<a class="download"
href="uploads/<?php echo $row['file_name']; ?>">

Download

</a>

</td>

</tr>

<?php } ?>

</table>

<br>

<a class="back" href="dashboard.php">

← Back to Dashboard

</a>

</div>

</body>
</html>