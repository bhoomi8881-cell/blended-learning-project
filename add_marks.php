<?php
session_start();
include("../db.php");

if(isset($_POST['submit']))
{
    $student_id = $_POST['student_id'];
    $subject = $_POST['subject'];
    $marks = $_POST['marks'];
    $total = $_POST['total'];

    $sql = "INSERT INTO marks(student_id,subject,marks,total)
            VALUES('$student_id','$subject','$marks','$total')";

    mysqli_query($conn,$sql);

    echo "<script>alert('Marks Added Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Student Marks</title>

<style>

body{
background:#eef2f7;
font-family:Arial;
}

.container{
width:500px;
margin:50px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px gray;
}

h2{
text-align:center;
color:#0d47a1;
}

input{
width:100%;
padding:12px;
margin:10px 0;
}

button{
width:100%;
padding:12px;
background:#0d47a1;
color:white;
border:none;
font-size:18px;
cursor:pointer;
}

</style>

</head>

<body>

<div class="container">

<h2>Add Student Marks</h2>

<form method="POST">

<input type="number"
name="student_id"
placeholder="Student ID"
required>

<input type="text"
name="subject"
placeholder="Subject"
required>

<input type="number"
name="marks"
placeholder="Marks"
required>

<input type="number"
name="total"
placeholder="Total Marks"
required>

<button name="submit">
Save Marks
</button>

</form>

</div>

</body>

</html>