<?php
session_start();

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

include("db.php");

$id = $_SESSION['student_id'];

$sql = "SELECT * FROM students WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Student Profile</title>

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,sans-serif;
}

body{
background:#eef2f7;
}

.header{
background:#0d47a1;
color:white;
padding:20px;
text-align:center;
font-size:28px;
font-weight:bold;
}

.container{
width:70%;
margin:40px auto;
background:white;
border-radius:12px;
box-shadow:0 5px 15px rgba(0,0,0,.2);
overflow:hidden;
}

.profile-header{
background:#1565c0;
color:white;
padding:30px;
text-align:center;
}

.profile-header img{
width:130px;
height:130px;
border-radius:50%;
border:4px solid white;
object-fit:cover;
margin-bottom:15px;
}

.profile-body{
padding:30px;
}

table{
width:100%;
border-collapse:collapse;
}

table td{
padding:15px;
border-bottom:1px solid #ddd;
font-size:18px;
}

table td:first-child{
font-weight:bold;
color:#0d47a1;
width:35%;
}

.buttons{
text-align:center;
margin-top:30px;
}

.buttons a{
display:inline-block;
margin:10px;
padding:12px 25px;
background:#0d47a1;
color:white;
text-decoration:none;
border-radius:5px;
}

.buttons a:hover{
background:#1565c0;
}

</style>

</head>

<body>

<div class="header">
Student Profile
</div>

<div class="container">

<div class="profile-header">

<img src="image/student.png" alt="Student Photo">

<h2>Bhoomika</h2>

<p>Computer Science Engineering</p>

</div>

<div class="profile-body">

<table>

<tr>
<td>Student ID</td>
<td>PU2026001</td>
</tr>

<tr>
<td>Name</td>
<td>Bhoomika</td>
</tr>

<tr>
<td>Email</td>
<td>bhoomika@example.com</td>
</tr>

<tr>
<td>Department</td>
<td>Computer Science Engineering</td>
</tr>

<tr>
<td>Semester</td>
<td>8th Semester</td>
</tr>

<tr>
<td>Phone</td>
<td>9876543210</td>
</tr>

<tr>
<td>Project</td>
<td>Blended Learning using AI & Cloud Computing</td>
</tr>

<tr>
<td>University</td>
<td>Presidency University</td>
</tr>

</table>

<div class="buttons">

<a href="dashboard.php">🏠 Dashboard</a>

<a href="logout.php">🚪 Logout</a>

</div>

</div>

</div>
<a href="edit_profile.php">
<button>Edit Profile</button>
</a>

<a href="change_password.php">
<button>Change Password</button>
</a>

</body>
</html>