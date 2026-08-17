<?php
session_start();
include("db.php");

if(!isset($_SESSION['student_id']))
{
    header("Location: login.php");
    exit();
}

$course_count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM courses"));
$material_count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM materials"));
$result_count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM results WHERE student_id='".$_SESSION['student_id']."'"));
$feedback_count = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM feedback WHERE student_id='".$_SESSION['student_id']."'"));

$student_name = $_SESSION['student_name'];
?>

<!DOCTYPE html>

<html>

<head>

<title>Blended Learning Portal</title>

<meta charset="UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:Arial,Helvetica,sans-serif;
}

body{

background:#f4f7fc;

}

.header{

background:#0D47A1;
padding:18px 40px;
display:flex;
justify-content:space-between;
align-items:center;
color:white;

box-shadow:0 5px 15px rgba(0,0,0,.2);

}

.logo h2{

font-size:30px;

}

.logo p{

font-size:14px;
margin-top:5px;
opacity:.9;

}

.buttons a{

text-decoration:none;
color:white;
padding:10px 18px;
background:#1565C0;
border-radius:8px;
margin-left:10px;
transition:.3s;

}

.buttons a:hover{

background:#1976D2;

}

.welcome{

width:92%;
margin:30px auto;
background:white;
padding:30px;
border-radius:15px;
display:flex;
justify-content:space-between;
align-items:center;
box-shadow:0 8px 20px rgba(0,0,0,.08);

}

.welcome h1{

color:#0D47A1;
margin-bottom:10px;

}

.welcome p{

color:#555;
font-size:17px;
margin-top:5px;

}

.stats{

width:92%;
margin:auto;

display:grid;

grid-template-columns:repeat(4,1fr);

gap:20px;

}

.stat{

background:white;

padding:25px;

text-align:center;

border-radius:15px;

box-shadow:0 8px 20px rgba(0,0,0,.08);

transition:.3s;

}

.stat:hover{

transform:translateY(-5px);

}

.stat h1{

font-size:42px;

color:#0D47A1;

margin-bottom:8px;

}

.stat p{

font-size:17px;

font-weight:bold;

color:#555;

}

.cards{

width:92%;

margin:35px auto;

display:grid;

grid-template-columns:repeat(auto-fit,minmax(230px,1fr));

gap:20px;

}

.card{

background:white;

padding:30px;

border-radius:15px;

text-align:center;

box-shadow:0 8px 20px rgba(0,0,0,.08);

transition:.3s;

}

.card:hover{

transform:translateY(-8px);

}

.card h2{

margin:15px 0;

color:#0D47A1;

}

.card a{

display:inline-block;

margin-top:15px;

padding:12px 20px;

background:#1565C0;

color:white;

text-decoration:none;

border-radius:8px;

transition:.3s;

}

.card a:hover{

background:#0D47A1;

}

.icon{

font-size:45px;

}

</style>

</head>

<body>

<div class="header">

<div class="logo">

<h2>🎓 Blended Learning Portal</h2>

<p>Artificial Intelligence & Cloud Computing</p>

</div>

<div class="buttons">


<a href="logout.php">Logout</a>

</div>

</div>

<div class="welcome">

<div>

<h1>

Welcome,

<?php echo $student_name; ?>

👋

</h1>

<p>

Learn Anytime, Anywhere.

</p>

<p>

📅

<?php echo date("l, d F Y"); ?>

</p>

</div>

<div>

<img src="images/logo.png" width="120">

</div>

</div>

<div class="stats">

<div class="stat">

<h1><?php echo $course_count; ?></h1>

<p>📚 Courses</p>

</div>

<div class="stat">

<h1><?php echo $material_count; ?></h1>

<p>📄 Materials</p>

</div>

<div class="stat">

<h1><?php echo $result_count; ?></h1>

<p>📝 Quiz Attempts</p>

</div>

<div class="stat">

<h1><?php echo $feedback_count; ?></h1>

<p>💬 Feedback</p>

</div>

</div>

<div class="cards">

<div class="card">
<div class="icon">📚</div>
<h2>Courses</h2>
<p>View all available courses.</p>
<a href="courses.php">Open</a>
</div>

<div class="card">
<div class="icon">📄</div>
<h2>Study Materials</h2>
<p>Download notes, PDFs and resources.</p>
<a href="materials.php">Open</a>
</div>

<div class="card">
<div class="icon">📝</div>
<h2>Online Quiz</h2>
<p>Attempt quizzes and improve your knowledge.</p>
<a href="quiz.php">Start Quiz</a>
</div>

<div class="card">
<div class="icon">📊</div>
<h2>Quiz Results</h2>
<p>Check your previous quiz scores.</p>
<a href="results.php">View Results</a>
</div>

<div class="card">
<div class="icon">📈</div>
<h2>Progress</h2>
<p>Track your learning performance.</p>
<a href="progress.php">View Progress</a>
</div>

<div class="card">
<div class="icon">🤖</div>
<h2>AI Assistant</h2>
<p>Ask questions using the AI chatbot.</p>
<a href="chatbot.php">Open</a>
</div>

<div class="card">
<div class="icon">📅</div>
<h2>Timetable</h2>
<p>View your weekly class schedule.</p>
<a href="timetable.php">View</a>
</div>

<div class="card">
<div class="icon">✅</div>
<h2>Attendance</h2>
<p>View Attendance</p>
<a href="attendance.php">Open</a>
</div>

<div class="card">

<div class="icon">📊</div>

<h2>Marks</h2>

<p>View Subject Marks</p>

<a href="marks.php">Open</a>

</div>

<div class="card">

<div class="icon">🎓</div>

<h2>Certificate</h2>

<p>Download Completion Certificate</p>

<a href="certificate.php">

Open

</a>

</div>

<div class="card">
<div class="icon">💬</div>
<h2>Feedback</h2>
<p>Send feedback to faculty.</p>
<a href="feedback.php">Open</a>
</div>

<div class="card">
<div class="icon">👤</div>
<h2>My Profile</h2>
<p>View and manage your profile.</p>
<a href="profile.php">Open</a>
</div>

</div>

<?php

$announcement = mysqli_query($conn,
"SELECT * FROM announcements ORDER BY id DESC LIMIT 5");

?>

<div style="width:92%;margin:20px auto;background:white;padding:25px;border-radius:15px;box-shadow:0 8px 20px rgba(0,0,0,.08);">

<h2 style="color:#0D47A1;margin-bottom:20px;">
📢 Latest Announcements
</h2>

<?php

if(mysqli_num_rows($announcement)>0)
{
while($row=mysqli_fetch_assoc($announcement))
{
?>

<div style="padding:15px;border-left:5px solid #1565C0;background:#f8f9fa;margin-bottom:15px;border-radius:8px;">

<h3 style="color:#0D47A1;">
<?php echo $row['title']; ?>
</h3>

<p style="margin-top:8px;color:#555;">
<?php echo $row['message']; ?>
</p>

</div>

<?php
}
}
else
{
echo "<p>No announcements available.</p>";
}
?>

</div>

<footer style="margin-top:40px;background:#0D47A1;color:white;text-align:center;padding:20px;">

<h3>Blended Learning Portal</h3>

<p style="margin-top:8px;">
Artificial Intelligence & Cloud Computing
</p>

<p style="margin-top:8px;">
© <?php echo date("Y"); ?> All Rights Reserved
</p>

</footer>

</body>

</html>