<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

if(isset($_POST['upload']))
{
    $assignment_id = $_POST['assignment_id'];
    $student_id = $_SESSION['student_id'];

    $filename = $_FILES['file']['name'];
    $temp = $_FILES['file']['tmp_name'];

    move_uploaded_file($temp,"uploads/assignments/".$filename);

    mysqli_query($conn,"INSERT INTO submissions(assignment_id,student_id,file_name)
    VALUES('$assignment_id','$student_id','$filename')");

    echo "<script>alert('Assignment Submitted Successfully');</script>";
}

$result = mysqli_query($conn,"SELECT * FROM assignments");
?>

<!DOCTYPE html>
<html>
<head>

<title>Assignments</title>

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
width:90%;
margin:30px auto;
}

.card{
background:white;
padding:20px;
margin-bottom:20px;
border-radius:10px;
box-shadow:0 0 10px rgba(0,0,0,.2);
}

input[type=file]{
margin:10px 0;
}

button{
padding:10px 20px;
background:#0d47a1;
color:white;
border:none;
cursor:pointer;
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
📝 Assignments
</div>

<div class="container">

<?php while($row=mysqli_fetch_assoc($result)){ ?>

<div class="card">

<h2><?php echo $row['title']; ?></h2>

<p><?php echo $row['description']; ?></p>

<p><b>Due Date:</b> <?php echo $row['due_date']; ?></p>

<form method="POST" enctype="multipart/form-data">

<input
type="hidden"
name="assignment_id"
value="<?php echo $row['id']; ?>">

<input
type="file"
name="file"
required>

<br>

<button
name="upload">
Submit Assignment
</button>

</form>

</div>

<?php } ?>

<a class="back" href="dashboard.php">

← Back to Dashboard

</a>

</div>

</body>
</html>