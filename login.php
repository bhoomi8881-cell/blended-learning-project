<?php
session_start();
include("db.php");

if(isset($_POST['login']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM students WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0)
    {
        $row = mysqli_fetch_assoc($result);

        $_SESSION['student_id'] = $row['id'];
        $_SESSION['student_name'] = $row['name'];
        $_SESSION['student_email'] = $row['email'];

        header("Location: dashboard.php");
        exit();
    }
    else
    {
        echo "<script>alert('Invalid Email or Password');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>

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

<h2>Student Login</h2>

<form method="POST">

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit"
name="login">
Login
</button>

</form>

<br>

<center>
New User?
<a href="register.php">Register Here</a>
</center>

</div>

</div>

</body>
</html><?php
include("db.php");

if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="SELECT * FROM students
          WHERE email='$email'
          AND password='$password'";

    $result=mysqli_query($conn,$sql);

    if(mysqli_num_rows($result)>0)
    {
        header("Location:dashboard.php");
        exit();
    }
    else
    {
        echo "<script>
        alert('Invalid Email or Password');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Login</title>

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

<h2>Student Login</h2>

<form method="POST">

<input type="email"
name="email"
placeholder="Enter Email"
required>

<input type="password"
name="password"
placeholder="Enter Password"
required>

<button type="submit"
name="login">
Login
</button>

</form>

<br>

<center>
New User?
<a href="register.php">Register Here</a>
</center>

</div>

</div>

</body>
</html>