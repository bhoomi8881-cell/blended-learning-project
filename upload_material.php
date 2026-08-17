<?php
session_start();

if(!isset($_SESSION['faculty']))
{
    header("Location: faculty_login.php");
    exit();
}
if(isset($_POST['upload']))
{
    $course=$_POST['course'];

    $filename=$_FILES['pdf']['name'];
    $temp=$_FILES['pdf']['tmp_name'];

    move_uploaded_file($temp,"../uploads/".$filename);

    $sql="INSERT INTO materials(course_name,file_name)
          VALUES('$course','$filename')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Material Uploaded Successfully');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Upload Material</title>

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

input,select{
width:100%;
padding:12px;
margin:10px 0;
}

button{
background:#0d47a1;
color:white;
padding:12px;
border:none;
cursor:pointer;
}

button:hover{
background:#1565c0;
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

Upload Study Material

</div>

<div class="container">

<form method="POST" enctype="multipart/form-data">

<label>Course</label>

<select name="course">

<option>Artificial Intelligence</option>

<option>Cloud Computing</option>

<option>Python Programming</option>

<option>Java Programming</option>

<option>Web Development</option>

<option>Database Management</option>

</select>

<label>Select PDF</label>

<input type="file" name="pdf" accept=".pdf" required>

<button name="upload">

Upload PDF

</button>

</form>

<br>

<a href="admin_dashboard.php">

← Back to Dashboard

</a>

</div>

</body>
</html>