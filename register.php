<?php
include("db.php");

if(isset($_POST['register']))
{
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO students(name,email,password)
          VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>
        alert('Registration Successful');
        window.location='login.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Registration</title>

<style>

body{
margin:0;
padding:0;
font-family:Arial,sans-serif;
}

.form-container{
height:100vh;

background:
linear-gradient(
rgba(0,0,0,0.6),
rgba(0,0,0,0.6)
),
url('image/college.jpg');

background-size:cover;
background-position:center;
background-repeat:no-repeat;

display:flex;
justify-content:center;
align-items:center;
}

.form-box{
background:white;
width:400px;
padding:40px;
border-radius:10px;
box-shadow:0 0 20px rgba(0,0,0,0.3);
}

.logo{
width:90px;
display:block;
margin:auto;
margin-bottom:15px;
}

h2{
text-align:center;
color:#0d47a1;
}

input{
width:100%;
padding:12px;
margin:10px 0;
border:1px solid #ccc;
border-radius:5px;
}

button{
width:100%;
padding:12px;
background:#0d47a1;
color:white;
border:none;
border-radius:5px;
cursor:pointer;
}

button:hover{
background:#1565c0;
}

a{
color:#0d47a1;
text-decoration:none;
}

</style>

</head>

<body>

<div class="form-container">

<div class="form-box">

<img src="image/logo.jpg" class="logo">

<h2>Student Registration</h2>

<form method="POST">

<input type="text"
name="name"
placeholder="Enter Full Name"
required>

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit"
name="register">
Register
</button>

</form>

<br>

<center>
Already Registered?
<a href="login.php">Login Here</a>
</center>

</div>

</div>

</body>
</html>