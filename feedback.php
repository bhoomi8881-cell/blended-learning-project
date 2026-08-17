<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

if(isset($_POST['send']))
{
    $student_id = $_SESSION['student_id'];
    $student_name = $_SESSION['student_name'];
    $message = $_POST['message'];

    $sql = "INSERT INTO feedback(student_id,student_name,message)
            VALUES('$student_id','$student_name','$message')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Feedback Sent Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Feedback</title>

<style>
body{
    font-family:Arial;
    background:#eef2f7;
}

.container{
    width:60%;
    margin:40px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

textarea{
    width:100%;
    height:150px;
    padding:10px;
}

button{
    margin-top:15px;
    background:#0d47a1;
    color:white;
    padding:12px 20px;
    border:none;
    cursor:pointer;
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

<div class="container">

<h2>Student Feedback</h2>

<form method="POST">

<textarea name="message"
placeholder="Write your feedback here..."
required></textarea>

<br><br>

<button name="send">Send Feedback</button>

</form>

<br>

<a href="dashboard.php">← Back</a>

</div>

</body>
</html>