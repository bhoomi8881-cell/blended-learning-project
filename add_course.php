<?php
session_start();

if(!isset($_SESSION['faculty']))
{
    header("Location: faculty_login.php");
    exit();
}
if(isset($_POST['save']))
{
    $course=$_POST['course'];
    $description=$_POST['description'];

    $sql="INSERT INTO courses(course_name,description)
          VALUES('$course','$description')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Course Added Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Course</title>

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
width:50%;
margin:40px auto;
background:white;
padding:30px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.2);
}

input,textarea{
width:100%;
padding:12px;
margin:10px 0;
}

button{
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

<div class="header">
Add New Course
</div>

<div class="container">

<form method="POST">

<label>Course Name</label>

<input type="text" name="course" required>

<label>Description</label>

<textarea name="description" rows="5" required></textarea>

<button name="save">Add Course</button>

</form>

<br>

<a href="admin_dashboard.php">← Back to Dashboard</a>

</div>

</body>
</html>