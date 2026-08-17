<?php
session_start();

if(!isset($_SESSION['faculty']))
{
    header("Location: faculty_login.php");
    exit();
}
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
<title>View Students</title>

<style>

body{
margin:0;
font-family:Arial,sans-serif;
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
margin-top:20px;
}

table,th,td{
border:1px solid #ddd;
}

th{
background:#0d47a1;
color:white;
padding:12px;
}

td{
padding:12px;
text-align:center;
}

tr:nth-child(even){
background:#f2f2f2;
}

a{
text-decoration:none;
background:#0d47a1;
color:white;
padding:10px 20px;
border-radius:5px;
}

</style>

</head>

<body>

<div class="header">
Registered Students
</div>

<div class="container">

<table>

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td><?php echo $row['name']; ?></td>

<td><?php echo $row['email']; ?></td>

</tr>

<?php
}
?>

</table>

<br><br>

<a href="admin_dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>