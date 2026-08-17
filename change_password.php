<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$id=$_SESSION['student_id'];

if(isset($_POST['change']))
{
    $old=$_POST['old_password'];
    $new=$_POST['new_password'];
    $confirm=$_POST['confirm_password'];

    $result=mysqli_query($conn,"SELECT * FROM students WHERE id='$id'");
    $row=mysqli_fetch_assoc($result);

    if($old==$row['password'])
    {
        if($new==$confirm)
        {
            mysqli_query($conn,"UPDATE students SET password='$new' WHERE id='$id'");

            echo "<script>alert('Password Changed Successfully');</script>";
        }
        else
        {
            echo "<script>alert('New Password and Confirm Password do not match');</script>";
        }
    }
    else
    {
        echo "<script>alert('Old Password is Incorrect');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Change Password</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
}

.container{
width:450px;
margin:60px auto;
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

a{
display:block;
margin-top:20px;
text-align:center;
text-decoration:none;
color:#0d47a1;
}

</style>

</head>

<body>

<div class="container">

<h2>Change Password</h2>

<form method="POST">

<input
type="password"
name="old_password"
placeholder="Old Password"
required>

<input
type="password"
name="new_password"
placeholder="New Password"
required>

<input
type="password"
name="confirm_password"
placeholder="Confirm Password"
required>

<button
name="change">

Change Password

</button>

</form>

<a href="profile.php">

← Back to Profile

</a>

</div>

</body>
</html>