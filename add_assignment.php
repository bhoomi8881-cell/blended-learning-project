<?php
include("../db.php");

if(isset($_POST['submit']))
{
    $title=$_POST['title'];
    $description=$_POST['description'];
    $due=$_POST['due'];

    mysqli_query($conn,"INSERT INTO assignments(title,description,due_date)
    VALUES('$title','$description','$due')");

    echo "<script>alert('Assignment Added Successfully');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Add Assignment</title>

<style>
body{
font-family:Arial;
background:#eef2f7;
}
.container{
width:500px;
margin:50px auto;
background:white;
padding:25px;
border-radius:10px;
box-shadow:0 0 10px gray;
}
input,textarea{
width:100%;
padding:10px;
margin:10px 0;
}
button{
width:100%;
padding:12px;
background:#0d47a1;
color:white;
border:none;
cursor:pointer;
}
</style>

</head>

<body>

<div class="container">

<h2>Add Assignment</h2>

<form method="POST">

<input type="text"
name="title"
placeholder="Assignment Title"
required>

<textarea
name="description"
placeholder="Description"
required></textarea>

<input
type="date"
name="due"
required>

<button
name="submit">
Add Assignment
</button>

</form>

</div>

</body>
</html>