<?php
session_start();

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$name = $_SESSION['student_name'];
$date = date("d F Y");
?>

<!DOCTYPE html>
<html>
<head>

<title>Course Certificate</title>

<style>

body{

background:#f4f7fc;
font-family:'Times New Roman',serif;
margin:0;
padding:40px;

}

.certificate{

width:900px;
margin:auto;
background:white;
border:12px solid #0D47A1;
padding:50px;
text-align:center;
box-shadow:0 0 25px rgba(0,0,0,.2);

}

h1{

font-size:48px;
color:#0D47A1;

}

h2{

margin-top:30px;
font-size:32px;

}

.name{

font-size:40px;
color:#1565C0;
font-weight:bold;
margin:30px 0;

}

.course{

font-size:28px;
margin:20px 0;

}

.footer{

margin-top:80px;
display:flex;
justify-content:space-between;

}

.sign{

text-align:center;

}

button{

margin-top:40px;
padding:12px 30px;
background:#0D47A1;
color:white;
border:none;
font-size:18px;
cursor:pointer;
border-radius:8px;

}

@media print{

button{
display:none;
}

}

</style>

</head>

<body>

<div class="certificate">

<h1>Certificate of Completion</h1>

<h2>This Certificate is Proudly Presented to</h2>

<div class="name">

<?php echo $name; ?>

</div>

<p class="course">

For Successfully Completing the

<strong>

Blended Learning Course

</strong>

using Artificial Intelligence & Cloud Computing.

</p>

<p>

Date :

<strong>

<?php echo $date; ?>

</strong>

</p>

<div class="footer">

<div class="sign">

_____________________

<br>

Faculty Signature

</div>

<div class="sign">

_____________________

<br>

Head of Department

</div>

</div>

<button onclick="window.print()">

🖨 Print Certificate

</button>

</div>

</body>

</html>