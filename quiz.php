<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

if(isset($_POST['submit']))
{
    $score = 0;

    // Correct Answers
    if($_POST['q1']=="B") $score++;
    if($_POST['q2']=="A") $score++;
    if($_POST['q3']=="C") $score++;
    if($_POST['q4']=="D") $score++;
    if($_POST['q5']=="B") $score++;
    if($_POST['q6']=="A") $score++;
    if($_POST['q7']=="C") $score++;
    if($_POST['q8']=="B") $score++;
    if($_POST['q9']=="D") $score++;
    if($_POST['q10']=="A") $score++;

    $student_id = $_SESSION['student_id'];

    $sql = "INSERT INTO results(student_id, score, total)
            VALUES('$student_id','$score','10')";

    mysqli_query($conn,$sql);

    echo "<script>alert('Your Score is $score / 10');</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Quiz</title>

<style>
body{
    font-family:Arial;
    background:#eef2f7;
    margin:0;
}

.container{
    width:70%;
    margin:30px auto;
    background:white;
    padding:30px;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}

h2{
    text-align:center;
    color:#0d47a1;
}

.question{
    margin-bottom:25px;
}

button{
    background:#0d47a1;
    color:white;
    padding:12px 25px;
    border:none;
    cursor:pointer;
    border-radius:5px;
}

button:hover{
    background:#1565c0;
}
</style>

</head>

<body>

<div class="container">

<h2>Online Quiz</h2>

<form method="POST">

<div class="question">
<p><b>1. What does AI stand for?</b></p>
<input type="radio" name="q1" value="A"> Automated Internet<br>
<input type="radio" name="q1" value="B"> Artificial Intelligence<br>
<input type="radio" name="q1" value="C"> Advanced Interface<br>
<input type="radio" name="q1" value="D"> None
</div>

<div class="question">
<p><b>2. HTML is used for?</b></p>
<input type="radio" name="q2" value="A"> Web Pages<br>
<input type="radio" name="q2" value="B"> Database<br>
<input type="radio" name="q2" value="C"> Networking<br>
<input type="radio" name="q2" value="D"> AI
</div>

<div class="question">
<p><b>3. CSS is used for?</b></p>
<input type="radio" name="q3" value="A"> Programming<br>
<input type="radio" name="q3" value="B"> Database<br>
<input type="radio" name="q3" value="C"> Styling Web Pages<br>
<input type="radio" name="q3" value="D"> Security
</div>

<div class="question">
<p><b>4. PHP is a?</b></p>
<input type="radio" name="q4" value="A"> Browser<br>
<input type="radio" name="q4" value="B"> Database<br>
<input type="radio" name="q4" value="C"> Operating System<br>
<input type="radio" name="q4" value="D"> Server-side Language
</div>

<div class="question">
<p><b>5. MySQL is a?</b></p>
<input type="radio" name="q5" value="A"> Browser<br>
<input type="radio" name="q5" value="B"> Database<br>
<input type="radio" name="q5" value="C"> Compiler<br>
<input type="radio" name="q5" value="D"> Editor
</div>

<div class="question">
<p><b>6. Cloud Computing provides?</b></p>
<input type="radio" name="q6" value="A"> Online Services<br>
<input type="radio" name="q6" value="B"> Monitor<br>
<input type="radio" name="q6" value="C"> Printer<br>
<input type="radio" name="q6" value="D"> Keyboard
</div>

<div class="question">
<p><b>7. Python is?</b></p>
<input type="radio" name="q7" value="A"> Database<br>
<input type="radio" name="q7" value="B"> Browser<br>
<input type="radio" name="q7" value="C"> Programming Language<br>
<input type="radio" name="q7" value="D"> OS
</div>

<div class="question">
<p><b>8. Java is?</b></p>
<input type="radio" name="q8" value="A"> Hardware<br>
<input type="radio" name="q8" value="B"> Programming Language<br>
<input type="radio" name="q8" value="C"> Browser<br>
<input type="radio" name="q8" value="D"> Antivirus
</div>

<div class="question">
<p><b>9. DBMS stands for?</b></p>
<input type="radio" name="q9" value="A"> Data Browser Management System<br>
<input type="radio" name="q9" value="B"> Data Backup Management System<br>
<input type="radio" name="q9" value="C"> Digital Base Management System<br>
<input type="radio" name="q9" value="D"> Database Management System
</div>

<div class="question">
<p><b>10. Which tag starts an HTML document?</b></p>
<input type="radio" name="q10" value="A"> &lt;html&gt;<br>
<input type="radio" name="q10" value="B"> &lt;body&gt;<br>
<input type="radio" name="q10" value="C"> &lt;head&gt;<br>
<input type="radio" name="q10" value="D"> &lt;title&gt;
</div>

<button type="submit" name="submit">Submit Quiz</button>

</form>

</div>

</body>
</html>