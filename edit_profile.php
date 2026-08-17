<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$id = $_SESSION['student_id'];

if(isset($_POST['update']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    mysqli_query($conn,"UPDATE students
    SET name='$name',
        email='$email',
        mobile='$mobile'
    WHERE id='$id'");

    $_SESSION['student_name']=$name;

    echo "<script>alert('Profile Updated Successfully');</script>";
}

$result=mysqli_query($conn,"SELECT * FROM students WHERE id='$id'");
$row=mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Profile</title>

<style>

body{
font-family:Arial;
background:#eef2f7;
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
cursor:pointer;
font-size:18px;
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

<h2>Edit Profile</h2>

<form method="POST">

<input
type="text"
name="name"
value="<?php echo $row['name']; ?>"
required>

<input
type="email"
name="email"
value="<?php echo $row['email']; ?>"
required>

<input
type="text"
name="mobile"
value="<?php echo $row['mobile']; ?>"
required>

<button
name="update">
Update Profile
</button>

</form>

<a href="profile.php">

← Back to Profile

</a>

</div>

</body>
</html>